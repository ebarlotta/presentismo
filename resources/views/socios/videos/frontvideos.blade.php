<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"/>
      
  </head>
  <body>
    {{-- <header>
        <style>
            header{
                display:flex;
                height: 80px;
                background-color: blueviolet;
                justify-content: space-evenly;
            }

            .logo {
                display: flex;
            }

            .logo img{
                height: 60px;
                margin-top: 7px;
            }
        </style>


        {{-- <div class="logo" style="height: 25%;">
            <img src="logo/Logo Terra Organic medio.png" alt="Logo Terra Organic" class="logo-img">
            
        </div>
        <button type="button" class="btn btn-warning">Warning</button>
        <input class="btn btn-primary" type="reset" value="Reset">
    </header> --}}

    @include('navbar')

    <div class="container mt-5">
      <div class="row row-wrap">
        <div class="col-xs-12 col-sm-6 col-md-4" style="border: 1px solid red">
            <h6>TITULO 1</h6>
          <div class="ratio ratio-16x9">
            <iframe
             src="https://www.youtube.com/embed/vojFasZO2OQ"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
          Epigrafe

          <div>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum molestias amet accusantium id voluptatum laudantium quas dolorem debitis inventore sapiente!
          </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-4" style="border: 1px solid red">
            <h6>TITULO 2</h6>
          <div class="ratio ratio-16x9">
            <iframe
             
              src="https://www.youtube.com/embed/nOlwF3HRrAY"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
          Epigrafe

          <div>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum molestias amet accusantium id voluptatum laudantium quas dolorem debitis inventore sapiente!
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4" style="border: 1px solid red">
            <h6>TITULO 3</h6>

          <div class="ratio ratio-16x9">
            <iframe
              
              src="https://www.youtube.com/embed/lSYZ1sZWvbQ"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
          Epigrafe
          <div>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum molestias amet accusantium id voluptatum laudantium quas dolorem debitis inventore sapiente!
          </div>
        </div>

        <div class="col-12" style="border: 1px solid red">
          <h6>TITULO 4</h6>

          <div class="ratio ratio-16x9">
            <iframe
             
              src="https://www.youtube.com/embed/lSYZ1sZWvbQ"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
          Epigrafe
          <div>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum molestias amet accusantium id voluptatum laudantium quas dolorem debitis inventore sapiente!
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
      integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
