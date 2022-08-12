<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <body>
    @include('dashboard.layout.Navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../../assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="/buttons">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="/typography">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/mdi">
                <span class="menu-title">IconsUsers</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./basic_elements">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/chartjs">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/basic-table">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="/blank-page"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="/login"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="/register"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="/error-404"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="/error-500"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                  <div class="border-bottom">
                    <p class="text-secondary">Categories</p>
                  </div>
                  <ul class="gradient-bullet-list mt-4">
                    <li>Free</li>
                    <li>Pro</li>
                  </ul>
                </div>
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Typography </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Typography</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Headings</h4>
                    <p class="card-description"> Add tags <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> or class <code>.h1</code> to <code>.h6</code>
                    </p>
                    <div class="template-demo">
                      <h1>h1. Heading</h1>
                      <h2>h2. Heading</h2>
                      <h3>h3. Heading</h3>
                      <h4>h4. Heading</h4>
                      <h5>h5. Heading</h5>
                      <h6>h6. Heading</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Headings with secondary text</h4>
                    <p class="card-description"> Add faded secondary text to headings </p>
                    <div class="template-demo">
                      <h1> h1. Heading <small class="text-muted"> Secondary text </small>
                      </h1>
                      <h2> h2. Heading <small class="text-muted"> Secondary text </small>
                      </h2>
                      <h3> h3. Heading <small class="text-muted"> Secondary text </small>
                      </h3>
                      <h4> h4. Heading <small class="text-muted"> Secondary text </small>
                      </h4>
                      <h5> h5. Heading <small class="text-muted"> Secondary text </small>
                      </h5>
                      <h6> h6. Heading <small class="text-muted"> Secondary text </small>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Display headings</h4>
                    <p class="card-description"> Add class <code>.display1</code> to <code>.display-4</code>
                    </p>
                    <div class="template-demo">
                      <h1 class="display-1">Display 1</h1>
                      <h1 class="display-2">Display 2</h1>
                      <h1 class="display-3">Display 3</h1>
                      <h1 class="display-4">Display 4</h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Paragraph</h4>
                        <p class="card-description"> Write text in <code>&lt;p&gt;</code> tag </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley not only five centuries, </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Icon size</h4>
                        <p class="card-description"> Add class <code>.icon-lg</code>, <code>.icon-md</code>, <code>.icon-sm</code>
                        </p>
                        <div class="row">
                          <div class="col-md-4 d-flex align-items-center">
                            <div class="d-flex flex-row align-items-center">
                              <i class="mdi mdi-compass icon-lg text-warning"></i>
                              <p class="mb-0 ms-1"> Icon-lg </p>
                            </div>
                          </div>
                          <div class="col-md-4 d-flex align-items-center">
                            <div class="d-flex flex-row align-items-center">
                              <i class="mdi mdi-compass icon-md text-success"></i>
                              <p class="mb-0 ms-1"> Icon-md </p>
                            </div>
                          </div>
                          <div class="col-md-4 d-flex align-items-center">
                            <div class="d-flex flex-row align-items-center">
                              <i class="mdi mdi-compass icon-sm text-danger"></i>
                              <p class="mb-0 ms-1"> Icon-sm </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Blockquotes</h4>
                    <p class="card-description"> Wrap content inside<code>&lt;blockquote class="blockquote"&gt;</code>
                    </p>
                    <blockquote class="blockquote">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote blockquote-primary">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Address</h4>
                    <p class="card-description"> Use <code>&lt;address&gt;</code> tag </p>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <p class="font-weight-bold">Purple imc</p>
                          <p> 695 lsom Ave, </p>
                          <p> Suite 00 </p>
                          <p> San Francisco, CA 94107 </p>
                        </address>
                      </div>
                      <div class="col-md-6">
                        <address class="text-primary">
                          <p class="font-weight-bold"> E-mail </p>
                          <p class="mb-2"> johndoe@examplemeail.com </p>
                          <p class="font-weight-bold"> Web Address </p>
                          <p> www.Purple.com </p>
                        </address>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Lead</h4>
                    <p class="card-description"> Use class <code>.lead</code>
                    </p>
                    <p class="lead"> Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Text colors</h4>
                    <p class="card-description"> Use class <code>.text-primary</code>, <code>.text-secondary</code> etc. for text in theme colors </p>
                    <div class="row">
                      <div class="col-md-6">
                        <p class="text-primary">.text-primary</p>
                        <p class="text-success">.text-success</p>
                        <p class="text-danger">.text-danger</p>
                        <p class="text-warning">.text-warning</p>
                        <p class="text-info">.text-info</p>
                      </div>
                      <div class="col-md-6">
                        <p class="text-light bg-dark ps-1">.text-light</p>
                        <p class="text-secondary">.text-secondary</p>
                        <p class="text-dark">.text-dark</p>
                        <p class="text-muted">.text-muted</p>
                        <p class="text-white bg-dark ps-1">.text-white</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Top aligned media</h4>
                    <div class="media">
                      <i class="mdi mdi-earth icon-md text-info d-flex align-self-start me-3"></i>
                      <div class="media-body">
                        <p class="card-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Center aligned media</h4>
                    <div class="media">
                      <i class="mdi mdi-earth icon-md text-info d-flex align-self-center me-3"></i>
                      <div class="media-body">
                        <p class="card-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bottom aligned media</h4>
                    <div class="media">
                      <i class="mdi mdi-earth icon-md text-info d-flex align-self-end me-3"></i>
                      <div class="media-body">
                        <p class="card-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Highlighted Text</h4>
                    <p class="card-description"> Wrap the text in <code>&lt;mark&gt;</code> to highlight text </p>
                    <p> It is a long <mark class="bg-warning text-white">established</mark> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List Unordered</h4>
                    <ul>
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa</li>
                      <li>Facilisis in pretium nisl aliquet</li>
                      <li>Nulla volutpat aliquam velit</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bold text</h4>
                    <p class="card-description"> Use class<code>.font-weight-bold</code>
                    </p>
                    <p> It is a long <span class="font-weight-bold">established fact</span> that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List Ordered</h4>
                    <ol>
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa</li>
                      <li>Facilisis in pretium nisl aliquet</li>
                      <li>Nulla volutpat aliquam velit></li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-primary">Underline</h4>
                    <p class="card-description"> Wrap in <code>&lt;u&gt;</code> tag for underline </p>
                    <p>
                      <u>lorem ipsum dolor sit amet, consectetur mod tempor incididunt ut labore et dolore magna aliqua.</u>
                    </p>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title text-danger">Lowercase</h4>
                    <p class="card-description"> Use class <code>.text-lowercase</code>
                    </p>
                    <p class="text-lowercase"> lorem ipsum dolor sit amet, consectetur mod tempor incididunt ut labore et dolore magna aliqua. </p>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title text-warning">Uppercase</h4>
                    <p class="card-description"> Use class <code>.text-uppercase</code>
                    </p>
                    <p class="text-uppercase"> lorem ipsum dolor sit amet, consectetur mod tempor incididunt ut labore et dolore magna aliqua. </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Mute</h4>
                    <p class="card-description"> Use class <code>.text-muted</code>
                    </p>
                    <p class="text-muted"> lorem ipsum dolor sit amet, consectetur mod tempor incididunt ut labore et dolore magna aliqua. </p>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title text-success">Strike</h4>
                    <p class="card-description"> Wrap content in <code>&lt;del&gt;</code> tag </p>
                    <p>
                      <del> lorem ipsum dolor sit amet, consectetur mod tempor incididunt ut labore et dolore magna aliqua. </del>
                    </p>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title text-info">Capitalized</h4>
                    <p class="card-description"> Use class <code>.text-capitalize</code>
                    </p>
                    <p class="text-capitalize"> lorem ipsum dolor sit amet, consectetur mod tempor incididunt ut labore et dolore magna aliqua. </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List with icon</h4>
                    <p class="card-description">Add class <code>.list-ticked</code> to <code>&lt;ul&gt;</code></p>
                    <ul class="list-ticked">
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa</li>
                      <li>Facilisis in pretium nisl aliquet</li>
                      <li>Nulla volutpat aliquam velit></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List with icon</h4>
                    <p class="card-description">Add class <code>.list-arrow</code> to <code>&lt;ul&gt;</code></p>
                    <ul class="list-arrow">
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa</li>
                      <li>Facilisis in pretium nisl aliquet</li>
                      <li>Nulla volutpat aliquam velit></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List with icon</h4>
                    <p class="card-description">Add class <code>.list-star</code> to <code>&lt;ul&gt;</code></p>
                    <ul class="list-star">
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa</li>
                      <li>Facilisis in pretium nisl aliquet</li>
                      <li>Nulla volutpat aliquam velit></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>