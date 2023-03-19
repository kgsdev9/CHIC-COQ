<!doctype html><html class="no-js" lang="zxx"><head><meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><title>VOTRE COMMANDE</title><meta name="author" content="Angfuzsoft"><meta name="description" content="Invce - Invoice HTML Template"><meta name="keywords" content="Invce - Invoice HTML Template"><meta name="robots" content="INDEX,FOLLOW"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"><link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png"><link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png"><link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png"><link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png"><link rel="manifest" href="assets/img/favicons/manifest.json"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png"><meta name="theme-color" content="#ffffff"><link rel="preconnect" href="https://fonts.googleapis.com/"><link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('invoice/js/app.min.js')}}">

    <link rel="stylesheet" href="{{asset('invoice/css/style.css')}}">

</head>

<body><div class="invoice-container-wrap">
    <div class="invoice-container"><main><div class="as-invoice invoice_style1">
        <div class="download-inner" id="download_section">
            <header class="as-header header-layout1">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto"><div class="header-logo">
                        <a href="{{url('/')}}"><img src="{{asset('logo.jpg')}}" alt="Invce"></a></div></div><div class="col-auto">


                        </div></div><div class="header-bottom"><div class="row align-items-center"><div class="col"><div class="border-line">



                        </div></div><div class="col-auto"><p class="invoice-number me-4">

    <b>Numero de la commande: </b>{{ $orders->code}}</p></div><div class="col-auto"><p class="invoice-date">
         <b>Date de la commande : </b>{{ $orders->created_at}}</p></div></div></div></header><div class="row justify-content-between mb-4"><div class="col-auto"><div class="invoice-left"><b>

        Adresse De Livraison :</b><address><br> {{ $orders->adresse_delivry}}</address></div></div><div class="col-auto"><div class="invoice-right"><b>Nom du client:</b><address>{{ $orders->fullname}}<br></address></div></div></div>


        <table class="invoice-table"><thead>



            <tr><th>Produit </th><th>Prix </th><th>Quantite</th><th>Image</th><th>Sous-total</th></tr></thead><tbody>



                @foreach ($orders->products as $value)


                <tr><td>{{Str::limit($value->name, 30)}}</td><td>{{$value->price}} FCFA</td><td>{{$value->pivot->quantity}}</td><td>

                    <img src="{{asset('cover/'.$value->img_one)}}" alt="sss" style="height: 60px; width:60px;">

                </td><td>{{$value->pivot->amount}} FCFA</td></tr>


                @endforeach
                <tr><td colspan="5">&nbsp;</td></tr>

            </tbody></table>




            <div class="row justify-content-between">



            <div class="col-auto"><table class="total-table"><tr>
               </tr><tr>
          </tr><tr><th></td></tr>

        </table></div></div><p class="invoice-note mt-3">
            <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.22969 12.6H9.77031V11.4H3.22969V12.6ZM3.22969 9.2H9.77031V8H3.22969V9.2ZM1.21875 16C0.89375 16 0.609375 15.88 0.365625 15.64C0.121875 15.4 0 15.12 0 14.8V1.2C0 0.88 0.121875 0.6 0.365625 0.36C0.609375 0.12 0.89375 0 1.21875 0H8.55156L13 4.38V14.8C13 15.12 12.8781 15.4 12.6344 15.64C12.3906 15.88 12.1063 16 11.7812 16H1.21875ZM7.94219 4.92V1.2H1.21875V14.8H11.7812V4.92H7.94219ZM1.21875 1.2V4.92V1.2V14.8V1.2Z" fill="#1CB9C8"/></svg> </b>

        </p>

        <button onclick="window.print()" class="btn btn-dark">IMPRIMER </button>





        </div></div></main></div></div>

    <script src="{{asset('invoice/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('invoice/js/app.min.js')}}"></script>

    <script src="{{asset('invoice/js/main.js')}}"></script>
</body></html>
