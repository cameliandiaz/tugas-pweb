<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>@yield('title', 'Laravel') | Project Akhir</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/starter-template/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{asset("assets/js/color-modes.js")}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
        
        <style>
            .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              user-select: none;
            }
      
            @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                font-size: 3.5rem;
              }
            }
      
            .b-example-divider {
              width: 100%;
              height: 3rem;
              background-color: rgba(0, 0, 0, .1);
              border: solid rgba(0, 0, 0, .15);
              border-width: 1px 0;
              box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }
      
            .b-example-vr {
              flex-shrink: 0;
              width: 1.5rem;
              height: 100vh;
            }
      
            .bi {
              vertical-align: -.125em;
              fill: currentColor;
            }
      
            .nav-scroller {
              position: relative;
              z-index: 2;
              height: 2.75rem;
              overflow-y: hidden;
            }
      
            .nav-scroller .nav {
              display: flex;
              flex-wrap: nowrap;
              padding-bottom: 1rem;
              margin-top: -1px;
              overflow-x: auto;
              text-align: center;
              white-space: nowrap;
              -webkit-overflow-scrolling: touch;
            }
      
            .btn-bd-primary {
              --bd-violet-bg: #712cf9;
              --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
      
              --bs-btn-font-weight: 600;
              --bs-btn-color: var(--bs-white);
              --bs-btn-bg: var(--bd-violet-bg);
              --bs-btn-border-color: var(--bd-violet-bg);
              --bs-btn-hover-color: var(--bs-white);
              --bs-btn-hover-bg: #6528e0;
              --bs-btn-hover-border-color: #6528e0;
              --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
              --bs-btn-active-color: var(--bs-btn-hover-color);
              --bs-btn-active-bg: #5a23c8;
              --bs-btn-active-border-color: #5a23c8;
            }
      
            .bd-mode-toggle {
              z-index: 1500;
            }
      
            .bd-mode-toggle .dropdown-menu .active .bi {
              display: block !important;
            }
          </style>

        
    </head>
    <body>
        <div class="col-lg-10 mx-auto p-4 py-md-5">
            @include('transactions.layouts.header')
            <main>
                @yield('content')
            </main>
            @include('transactions.layouts.footer')
        </div>
        <script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="https://kit.fontawesome.com/ff0f42fa5e.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(".confirm-delete").on('click', function(event){
                var form = $(this).closest("form");
                event.preventDefault();

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                    });
            });
        </script>
        <script>
          $(document).ready(function(){
              $('#amount').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:2});
          });

          $('form').submit(function() {
              $('#amount').val($('#amount').maskMoney('unmasked')[0]);
          });
        </script>
    </body>
</html>