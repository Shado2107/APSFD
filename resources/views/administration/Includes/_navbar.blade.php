  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              {{-- <img src="../client-face1.jpg" class="img-circle" alt="User Image"> --}}
            </div>
            <div class="pull-left info">
              {{-- <p>{{Auth::User()->Nom}} {{Auth::User()->prenom}}</p>
              <a href="#"><i class=""></i>{{Auth::User()->role}}</a>
            </div> --}}
          </div>

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
                <li>
                  <a href="/admin/home">
                    <i class="fa fa-th"></i> <span>Acceuil</span>
                  </a>
                </li>
         
            <li>
              <a href="/admin/membres">
                <i class="fa fa-calendar"></i> <span>Membres</span>
              </a>
            </li>
            <li>
              <a href="/admin/actu">
                <i class="fa fa-envelope"></i> <span>Actualités</span>
              </a>
            </li>
            <li>
              <a href="/admin/blog">
                <i class="fa fa-envelope"></i> <span>Blog</span>
              </a>
            </li>
            <li>
                <a href="/admin/add_admin">
                  <i class=" fa fa-hourglass-half"></i> <span>Ajouter admin</span>
                </a>
              </li>
          

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
