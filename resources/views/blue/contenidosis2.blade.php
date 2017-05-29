 @extends('blue.layouts.plantillasis')
@section('contentsis')

<!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">

        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>
              <h2 class="templatemo-inline-block">Desarrollador en Java</h2><hr>
        
              <p>UNIVERSIDAD TECNOLOGICA DEL VALLE DE TOLUCA</p>              
              <p>Toluca, Estado de México</p>              
              <p>23 años </p>              
              <p>Le interesa empresas desarrolladoras de software en JAVA</p>              
              <p>3 años como desarrollador de software en GIOTIC</p> 

              <div  class="four columns">
              <h3> No. {{ $usu -> id}}</h3>
              <p> Nombre: {{ $usu -> ap_pat }} {{ $usu -> ap_mat }} {{ $usu ->nombre}}
              Correo: {{ $usu->correo }}
              Pass: {{ $usu->pass }}</p>
              </div>

        </div>
            <div class="templatemo-content-widget white-bg col-1 text-center">
              <i class="fa fa-times"></i>
              <h2 class="text-uppercase">Curriculum</h2>
              <h3 class="text-uppercase">Escrito</h3><hr>
              <img src="images/vitae.jpg" alt="Bicycle" class="img-circle img-thumbnail">
            </div>
            <div class="templatemo-content-widget white-bg col-1 text-center">
              <i class="fa fa-times"></i>
              <h2 class="text-uppercase">Curriculum</h2>
              <h3 class="text-uppercase">Video</h3><hr>
              <img src="images/video.png" alt="Bicycle" class="img-circle img-thumbnail">
            </div>
          </div>
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="templatemo-content-widget orange-bg">
                <i class="fa fa-times"></i>                
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Notas</h2>
                    <p>Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur.</p>  
                  </div>        
                </div>                
              </div>            
           
            </div>
            <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Empleos anteriores</h2></div>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <td>Numero</td>
                        <td>Cargo </td>
                        <td>Empresa</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Analista</td>
                        <td>Intel</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Programador</td>
                        <td>Systems JR</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Tester</td>
                        <td>Tecnogyes</td>
                      </tr>                    
                    </tbody>
                  </table>    
                </div>                          
              </div>
            </div>           
          </div> <!-- Second row ends -->

 <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden"> <!-- overflow hidden for iPad mini landscape view-->
            <div class="col-1 templatemo-overflow-hidden">
              <div class="templatemo-content-widget white-bg templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
                <div class="templatemo-flex-row flex-content-row">
                  <div class="col-1 col-lg-6 col-md-12">
                    <h2 class="text-center">Tus gustos<span class="badge">revisar</span></h2>
                    <div id="pie_chart_div" class="templatemo-chart"></div> <!-- Pie chart div -->
                  </div>
                  <div class="col-1 col-lg-6 col-md-12">
                    <h2 class="text-center">Posibles Empresas<span class="badge">revisar</span></h2>
                    <div id="bar_chart_div" class="templatemo-chart"></div> <!-- Bar chart div -->
                  </div>  
                </div>                
              </div>
            </div>
          </div>
          @endsection