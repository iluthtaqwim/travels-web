   <!-- navbar -->
   <style>
       .topnav .search-container {
           float: right;
       }

       .topnav input[type=text] {
           padding: 6px;
           margin-top: 20px;
           font-size: 17px;
           border: none;
           border-radius: 5px 0 0 5px;

       }

       .topnav .search-container button {

           padding: 6px 10px;
           margin-top: 8px;
           margin-right: 40px;
           background: #ddd;
           font-size: 17px;
           border: none;
           border-radius: 0 5px 5px 0;
           cursor: pointer;
       }

       .topnav .search-container button:hover {
           background: #ccc;
       }

       @media screen and (max-width: 600px) {
           .topnav .search-container {
               float: none;
           }

           .topnav a,
           .topnav input[type=text],
           .topnav .search-container button {
               float: none;
               display: block;
               text-align: center;
               width: 100%;
               margin: 0;
               padding: 14px;

           }

           .topnav input[type=text] {
               border: 1px solid rgb(255, 255, 255);
           }
       }
   </style>

   <div class="tm-header">
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container" style="padding-left:5%">
                   <a href="/" class="tm-site-name">CV Mandiri Jaya Group</a>
               </div>
               <div class="col-lg-6 col-md-8 col-sm-9">
                   <div class="mobile-menu-icon">
                       <i class="fa fa-bars"></i>
                   </div>
                   <nav class="tm-nav topnav">
                       <ul>
                           <li><a href="/" class="active">Beranda</a></li>
                           <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                           <li><a href="{{ route('contact') }}">Contact</a></li>

                           <div class="search-container">
                               <form action="{{ route('search') }}" method="get">

                                   <input type="text" placeholder="Search.." name="search">
                                   <button type="submit"><i class="fa fa-search"></i></button>
                               </form>
                           </div>

                       </ul>
                   </nav>
               </div>
           </div>
       </div>
   </div>
