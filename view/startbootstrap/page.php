/*******************************************************Back End Pagination*******************************************************************************/
  var pageNumber = req.body.PageNumber;
    var itemsPerPage = req.body.ItemsPerPage;
    var searchParameters = req.body.SearchParameters;

    var clause = ""; 

    if (pageNumber && itemsPerPage) {
        let offSet = (pageNumber - 1) * itemsPerPage;
        clause = ` ORDER BY id OFFSET ${offSet} ROWS FETCH NEXT ${itemsPerPage} ROWS ONLY`
    } else {
        pageNumber = 1;
        itemsPerPage = 10;
        clause = ` ORDER BY id OFFSET 0 ROWS FETCH NEXT 10 ROWS ONLY`
    } 

    if (searchParameters && searchParameters.length > 2) {
        let whereClause = ` WHERE TrackingNumber LIKE '%${searchParameters}%' OR OrderNumber  LIKE '%${searchParameters}%' OR TrackingStatus  LIKE '%${searchParameters}%' OR BVNumber  LIKE '%${searchParameters}%' OR OrderItemId  LIKE '%${searchParameters}%' `;
        clause = whereClause + clause;
    }

 

    var sqlRequest = "USE [Amazon] SELECT '" + UserName + "' AS UserName, '" + Token + "' AS Token, OrderTrackingId, id, BVNumber, OrderNumber, OrderItemId, ShipmentId, Service, Carrier, " +
        "Status, EstDelDate, IsBusinessOrder, IsPremiumOrder, IsPrime, IsReplacementOrder, Weight, Length, Width, Height, UnitOfMeasureDim, UnitOfMeasureWeight, " +
        "IsAddressSharingConfidential, CarrierWillPickUp, DeliveryExperience, UnitPrice, Currency, TrackingNumber, ChannelID, ShippingCost, ShippingTax, TotalShippingCost,TrackingStatus, TrackingNotes, " +
        "(SELECT COUNT(*) FROM Shipment) AS TotalCount " +
        "FROM Shipment " + clause;

 

    var items = '';

 

    utilities.sqlQueryPoolLocal(sqlRequest, function (req, res) {
        var shipments = [];
        let totalCount = 0;
        let totalPages = 1;

 

        if (recordset !== undefined) {
            var productsStringified = JSON.stringify(recordset);
            items = JSON.parse(productsStringified);
            for (x = 0; items.length > x; x++) {
                if (x === 0) totalCount = items[x].TotalCount;
                shipments.push(items[x]);
            }
        }

 

        totalPages = Math.ceil(totalCount / itemsPerPage);

 

        res.render('AmazonShippingTable', {
            title: 'Amazon Shipping Table', year: new Date().getFullYear(), message: 'Amazon Shipping Table',
            UserName: UserName, 
            Token: Token,
            shipped: shipments, 
            shippedCount: shipments.length,
            pageNumber: pageNumber,
            itemsPerPage: itemsPerPage,
            totalCount: totalCount,
            totalPages: totalPages
        });
        res.end;
    }, req, res);
    /*******************************************************Back End Pagination*******************************************************************************/

 

    /*******************************************************Front End Handlers*******************************************************************************/
function changePage(page) {
    let username = document.getElementById('userNameLoggedIn').innerHTML;
    let token = document.getElementById('tokenLoggedIn').innerHTML;

 

    /***Gets last page number by getting the total pages variable***/
    let lastPage = document.getElementById('totalPages').innerHTML;
    let currentPage = document.getElementById('pageNumber').innerHTML ? document.getElementById('pageNumber').innerHTML:1;
    let itemsPerPage = document.getElementById('itemsPerPage').innerHTML;
    let searchParameters = document.getElementById('txtSearch')?document.getElementById('txtSearch').value:'';

 

    /***Figures out new page, on initial request page is always 1, makes sure to go back to first page if next on last page and vice versa***/
    let newPage = page ===1?1:(page === 'next' ? (+currentPage + 1) <= lastPage ? (+currentPage + 1) : 1
        : (+currentPage - 1) > 1 ? (+currentPage-1) : lastPage);
    
    /***Sets the new page number***/
    $("#pageNumber").html(newPage);

 

    /***Activates a loading gif***/
    $("#tblShippedList").html("<img src='public/images/loader.gif' alt='Loading' style='display:block; margin:auto;' width= '25%' height= '25%'>");    

 

    /**Make the request to the backend***/
    $.post(baseUrl + '/amazon/Shipping/table', {
        UserName: username,
        Token: token,
        Page: 'amazonShippingTable',
        PageNumber: newPage,
        ItemsPerPage: itemsPerPage,
        SearchParameters: searchParameters ? searchParameters: ""
    }).done(function (data) {
        {
            if (data === 'YOU NEED TO LOG YOURSELF IN FIRST!') { document.getElementById('id01').style.display = 'block'; }
            else {

 

            /**Update the page***/
                $("#shippedListDiv").html(data);
                document.getElementById('index').style.display = 'none';
                $("#cmbItemsPerPage").val(itemsPerPage);
            }
        }
    });    
}
    /*******************************************************Front End Handlers*******************************************************************************/

 


    /*******************************************************Jade table (parses to HTML)*******************************************************************************/
block content      
  p(style="visibility:hidden; height:0px" id='totalPages') !{totalPages}
  p(style="visibility:hidden; height:0px" id ='pageNumber') !{pageNumber}
  p(style="visibility:hidden; height:0px" id ='itemsPerPage') !{itemsPerPage}    
    div
     input.form-control(type="text" placeholder="Search" name="txtSearch" id="txtSearch")
     button(class="btn btn-success btn-sm" data-toggle="collapse" name="btnSearch" onclick="searchShipments()") Search 
     select.btn.btn-theme03.comboBox(name="cmbItemsPerPage" id="cmbItemsPerPage" onchange='changeItemsPerPage(this)')
      option(id='items10' value="10" ) 10
      option(id='items30' value="30" ) 30
      option(id='items50' value="50" ) 50
      option(id='items70' value="70") 70
      option(id='items100' value="100") 100
      option(id='items200' value="200" ) 200
    div.page-select
     div
      button(class="btn btn-default btn-sm" onclick="changePage('prev')") < Prev  !{itemsPerPage}       
     div.w-6
      h5 Page !{pageNumber} of !{totalPages} 
     div
      button(class="btn btn-default btn-sm" onclick="changePage('next')") Next  !{itemsPerPage}  >      

 

    div.table-responsive(id="shippedList", name="shippedList", style="width:100%;overflow: auto;")
     table.table.display.table-striped(id="tblShippedList", cellspacing="0")
       thead
        tr
         th BVNumber
         th OrderNumber
         th OrderItemId
         th ShipmentId
         th Service
         th Carrier
         th ShippingCost
         th Currency
         th Status
         th Dimensions   
         th Tracking Number
         th Channel ID 
         th Tracking Status
         th Tracking Notes
       tbody
        each ship in shipped
         tr
          td=ship.BVNumber 
          td=ship.OrderNumber
          td=ship.OrderItemId
          td=ship.ShipmentId
          td=ship.Service
          td=ship.Carrier
          td=ship.ShippingCost
          td=ship.Currency
          td=ship.Status
          td 
           div
            p=ship.Length + ' x ' + ship.Width + ' x  ' + ship.Height + ' ' + ship.UnitOfMeasureDim
            .row.topborder
            p=ship.Weight + ' ' + ship.UnitOfMeasureWeight
          td=ship.TrackingNumber
          td=ship.ChannelID 
          td=ship.TrackingStatus 
          td=ship.TrackingNotes 
          
    div.page-select
     div
      button(class="btn btn-default btn-sm" onclick="changePage('prev')") < Prev  !{itemsPerPage}       
     div.w-6
      h5 Page !{pageNumber} of !{totalPages} 
     div
      button(class="btn btn-default btn-sm" onclick="changePage('next')") Next  !{itemsPerPage}  >      
      
    /*******************************************************Jade table (parses to HTML)*******************************************************************************/