$(document).ready(function(){
    var source = $("#first-template").html();
    var template = Handlebars.compile(source);
	

    var products = [
                    {
                        product_id: "41",
                        record_number: "MPR-41",
                        time_stamp: "2019-06-11 10:35:13",
                        product_designation: "Acier 1000C",
                        length: 2,
                        product_packagings: [
                            {
                                product_packaging_id: "40",
                                product_packaging_designation: "PACK DE 35 KG",
                                time_stamp: "2019-06-24 13:18:01",
                                record_number: "CND-40",
                                provider: "retail Boxes",
                                last_price: "100",
                                stock_amount: "0"
                            }
                        ]
                    },
                    {
                        product_id: "40",
                        record_number: "MPR-40",
                        time_stamp: "2019-06-11 10:35:13",
                        product_designation: "Acier argente",
                        length: 2,
                        product_packagings: [
                            {
                                product_packaging_id: "40",
                                product_packaging_designation: "PACK DE 35 KG",
                                time_stamp: "2019-06-24 13:18:01",
                                record_number: "CND-40",
                                provider: "Ecommerce Boxes",
                                last_price: "3500",
                                stock_amount: "0"
                            }
                        ]
                    },
                    {
                        product_id: "39",
                        record_number: "MPR-39",
                        time_stamp: "2019-06-11 10:35:13",
                        product_designation: "Acier inox - Alloy 40"
                    },
                    {
                        product_id: "38",
                        record_number: "MPR-38",
                        time_stamp: "2019-06-11 10:35:13",
                        product_designation: "Alliage - Barre",
                        length: 3,
                        product_packagings: [
                            {
                            product_packaging_id: "40",
                            product_packaging_designation: "PACK DE 35 KG",
                            time_stamp: "2019-06-24 13:18:01",
                            record_number: "CND-40",
                            provider: "Packaging Tapes",
                            last_price: "15200",
                            stock_amount: "0"
                            },
                            {
                            product_packaging_id: "41",
                            product_packaging_designation: "SAC DE 50 KG",
                            time_stamp: "2019-06-24 22:01:52",
                            record_number: "CND-41",
                            provider: "Packaging Tapes",
                            last_price: "13300",
                            stock_amount: "162"
                            }
                        ],
                        providers: [
                            {
                            provider_id: "6",
                            provider_designation: "retail Boxes",
                            lastprice: "15000"
                            }
                        ]
                    },
                    {
                        product_id: "37",
                        record_number: "MPR-37",
                        time_stamp: "2019-06-11 10:35:13",
                        product_designation: "Acier inoxydable - 17-4PH"
                    },
                    {
                        product_id: "36",
                        record_number: "MPR-36",
                        time_stamp: "2019-06-11 10:35:13",
                        product_designation: "Acier inoxydable - 15-7PH",
                        length: 2,
                        product_packagings: [
                        {
                            product_packaging_id: "41",
                            product_packaging_designation: "SAC DE 50 KG",
                            time_stamp: "2019-06-24 22:01:52",
                            record_number: "CND-41",
                            provider: "Ecommerce Boxes",
                            last_price: "2500",
                            stock_amount: "0"
                        }
                    ]
                    },
                    {
                        product_id: "42",
                        record_number: "MPR-42",
                        time_stamp: "2019-06-11 10:35:13",
                        product_designation: "Ceramique - Barre"
                    },
                    {
                        product_id: "44",
                        record_number: "MPR-40",
                        time_stamp: "2019-06-11 10:35:13",
                        product_designation: "CIMENT"
                    },
                    {
                        product_id: "45",
                        record_number: "MPR-44",
                        time_stamp: "2019-06-28 20:15:16",
                        product_designation: "SABLE"
                    }
        ]
		

        var el_html = template({products : products});

        $("#first-template").html(el_html);
        
/* 
    $.ajax({
        method:"GET",
		crossDomain: true,
		beforeSend: function(req) {
        req.setRequestHeader("Accept", "text/xml");
		req.setRequestHeader("Access-Control-Allow-Origin", "'http://localhost/parc/public/api/courses");
		req.setRequestHeader("Content-Type", "application/json");
		},
        url: "http://localhost/parc/public/api/courses",        
        dataType: "json",
        success:function(data){
            let product = (data.data)
            console.log(product)
            
    var el_html = template({products : product});

    $("#first-template").html(el_html);
        },
        error: (error) => {
            console.log(error)
        }
     }); */	

    //var el_html = template({contexte: context, products: products});
	

});