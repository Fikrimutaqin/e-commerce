<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::to('assets/css/style.css')}}">

    <title>Toko Kami</title>
  </head>
  <body>
    

    <div class="container-fluid bg-light">
        <div class="mb-2">
            <div class="row">
                <!-- Small Navbar-->
                <div class="col-lg-8 col-md-8">
                    <div class="justify-content-start">
                        <P class="text-dark pl-4">Download App</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="justify-content-end">
                        <!-- This is open ul-->
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mitra Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Promo</a>
                            </li>
                        </ul>
                        <!-- This is close ul-->
                    </div>
                </div>
                <!--End Small Navbar-->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <!--logo and category-->
                <div class="d-flex justify-content-center">
                    <img src="https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/zeus/production/e5b8438b.svg" alt="logo alt">
                </div>
                <!--end logo and category-->
            </div>
            <div class="col-lg-8">
                <!--form search by category-->
                <div class="d-flex">
                     <p>category</p>
                    <div class="w-100 pl-3"> 
                        {{ Form::open(array('url' => '/search')) }}
                            {{  Form::text('search', '', array('class' => 'form-control'))  }} 
                        {{ Form::close() }}
                    </div>
                   
                </div>
                <!--end form search by category-->
            </div>
            <div class="col-lg-2">
                <!--button group-->
                <button type="submit" class="btn btn-outline-success">Masuk</button>
                <button type="submit" class="btn btn-primary">Daftar</button>
                <!--end butoon group-->
            </div>
        </div> 
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>