<!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <h1>Gerardo Moreno Torales</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/formal.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Buscar" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Información Personal</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-bar-chart fa-fw"></i>Estadisticas</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>Videos</a></li>
            <li><a href="manage-users.html"><i class="fa fa-users fa-fw"></i>Contactos</a></li>
            <li><a href="preferences.html"><i class="fa fa-sliders fa-fw"></i>Configuración</a></li>
            <li><a  href="{{ URL::action('BlueController@index') }}"><i class="fa fa-eject fa-fw"></i>Cerrar sesion</a></li>
          </ul>  
        </nav>
      </div>