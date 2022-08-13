<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('css/invoices.css')  }}">

    <title>Invoice..!</title>
</head>
<style>
    :root {
    --body-bg: rgb(204, 204, 204);
    --white: #ffffff;
    --darkWhite: #ccc;
    --black: #000000;
    --dark: #615c60;
    --themeColor: #22b8d1;
    --pageShadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
    --webkit-print-color-adjust: exact;
}

/* Font Include */
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');

body {
    background-color: var(--body-bg);
}


.page {
    background: var(--white);
    display: block;
    margin: 0 auto;
    position: relative;
    box-shadow: var(--pageShadow);
}

.page[size="A4"] {
    width: 21cm;
    height: 29.7cm;
    overflow: hidden;
}

.bb {
    border-bottom: 3px solid var(--darkWhite);
}

/* Top Section */
.top-content {
    justify-content: center;
    align-items: center;
    text-align: center;
    padding-bottom: 15px;
}

.logo img {
    height: 140px;
}

.top-mid {
    height: auto;
    width: auto;
    justify-content: center;
    text-align: center;
    align-items: center;
    margin: 0;
    
}
.top-mid .content{
    text-align: center;
    color: black
}
.top-mid .content h5{
    font-size: 1rem;
    margin:0;
    padding-bottom: 3px
}
.top-mid .content span{
    font-size: 1rem;
    font-weight: 800;
}
.top-mid .content p{
    font-size: 0.8rem;
    font-weight: 500;
    margin: 0;
}
.top-mid .content h4{
    font-size: 1.2rem;
    font-weight: 700;
    margin: 0;
}

.top-left p {
    margin: 0;
}

.top-left .graphic-path {
    height: 40px;
    position: relative;
}

.top-left .graphic-path::before {
    content: "";
    height: 20px;
    background-color: var(--dark);
    position: absolute;
    left: 15px;
    right: 0;
    top: -15px;
    z-index: 2;
}

.top-left .graphic-path::after {
    content: "";
    height: 22px;
    width: 17px;
    background: var(--black);
    position: absolute;
    top: -13px;
    left: 6px;
    transform: rotate(45deg);
}

.top-left .graphic-path p {
    color: var(--white);
    height: 40px;
    left: 0;
    right: -100px;
    text-transform: uppercase;
    background-color: var(--themeColor);
    font: 26px;
    z-index: 3;
    position: absolute;
    padding-left: 10px;
}

/* User Store Section */
.store-user {
    padding-bottom: 25px;
}

.store-user p {
    margin: 0;
    font-weight: 600;
}

.store-user .address {
    font-weight: 400;
}

.store-user h2 {
    color: var(--themeColor);
    font-family: 'Rajdhani', sans-serif;
}

.extra-info p span {
    font-weight: 400;
}

/* Product Section */
thead {
    color: var(--white);
    background: grey;
}

.table td,
.table th {
    text-align: center;
    vertical-align: middle;
}

tr th:first-child,
tr td:first-child {
    text-align: left;
}

.media img {
    height: 60px;
    width: 60px;
}

.media p {
    font-weight: 400;
    margin: 0;
}

.media p.title {
    font-weight: 600;
}

/* Balance Info Section */
.balance-info .table td,
.balance-info .table th {
    padding: 0;
    border: 0;
}

.balance-info tr td:first-child {
    font-weight: 600;
}

tfoot {
    border-top: 2px solid var(--darkWhite);
}

tfoot td {
    font-weight: 600;
}

/* Cart BG */
.cart-bg {
    height: 250px;
    bottom: 32px;
    left: -40px;
    opacity: 0.3;
    position: absolute;
}

/* Footer Section */
footer {
    text-align: center;
    position: absolute;
    bottom: 30px;
    left: 75px;
}

footer hr {
    margin-bottom: -22px;
    border-top: 3px solid var(--darkWhite);
}

footer a {
    color: var(--themeColor);
}

footer p {
    padding: 6px;
    border: 3px solid var(--darkWhite);
    background-color: var(--white);
    display: inline-block;
}

</style>
<body>
    <div class="my-5 page" size="A4">
        <div class="p-0">
            <section class="top-content bb">
                <div class="top-mid">
                    <div class="content">
                        <h2>Updating Stuff Today</h2>
                        

                    </div>
                </div>
                
            </section>

            <section class="store-user mt-5">
                <div class="col-10">
                    
                    </div>
                    <div class="row extra-info p">
                        <div class="col-12 bb">
                            <h5>Title: <span>Report Updating Entry & Checkout Stuff Today</span></h5>
                        </div>
                        
                    </div>
                </div>
            </section>

            <section class="product-area mt-4">
                <table class="table table-hover">
                    <thead>
                        <h5 class="bb">Title: <span>Report Updating Entry </span></h5>
                        <tr>
                            <td>Stuff</td>
                            <td>Category</td>
                            <td>Updated By</td>
                            <td>Count</td>
                            <td>Date & Time</td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                        @foreach ($all as $item)
                                            <h5>{{ $item->title }}</h5>
                                        @endforeach
                                    </div>
                                </div>
                            </td>
                            <td>
                                @foreach ($all as $item =>$value)
                                   
                                    <h5>{{ $value->name }}</h5>
                                                           
                                    @endforeach
                                    
                                
                            </td>
                            <td>
                                @foreach ($all as $item =>$value)
                                <h5>{{ $value->username}}</h5>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($all as $item =>$value)
                                <h5>{{ $value->count}}</h5>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($all as $item =>$value)
                                <h5>{{ date('D g:i', strtotime($value->updated_at))}}</h5>
                                @endforeach
                            </td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </section>

            <section class="product-area mt-4">
                <table class="table table-hover">
                    <thead>
                        <h5 class="bb">Title: <span>Report Checkout Stuff </span></h5>
                        <tr>
                            <td>Stuff</td>
                            <td>Cashier By</td>
                            <td>Count</td>
                            <td>Date & Time</td>
                            <td>Price</td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                        @foreach ($tf as $item)
                                            <h5>{{ $item->title }}</h5>
                                        @endforeach
                                    </div>
                                </div>
                            </td>
                            <td>
                                @foreach ($tf as $item =>$value)
                                   
                                    <h5>{{ $value->username }}</h5>
                                                           
                                    @endforeach
                                    
                                
                            </td>
                            <td>
                                @foreach ($tf as $item =>$value)
                                <h5>{{ $value->count}}</h5>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($tf as $item =>$value)
                                <h5>{{ date('D g:i', strtotime($value->created_at))}}</h5>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($tf as $item =>$value)
                                <h5>Rp {{ $value->price}}</h5>
                                @endforeach
                            </td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </section>

            
            
        </div>
    </div>


</body></html>