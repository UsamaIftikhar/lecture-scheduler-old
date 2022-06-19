<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Teacher-Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        <?php
        opcache_reset();
        require_once('./top-header.php');
        ?>
        <div class="app-main">
            <?php
            $currentPage = basename($_SERVER['REQUEST_URI']);
            require_once('./student-sidebar.php');
            Sidebar($currentPage);
            ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Hi Professor, Hashim
                                    <div class="page-title-subheading">This is the Teacher's panel dashboard you can view and manage anything from here.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row col-lg-6 justify-content-between">

                        <div class="form-group col-lg-6 pl-0 pr-4">
                            <label for="input_from">Select Department</label>
                            <select type="" class="form-control" id="input"></select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="input_from">Select Course</label>
                            <select type="" class="form-control" id="input"></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input_from">Select Date</label>
                        <input type="date" class="form-control" id="input">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Lectures for Monday, 19th June 2022
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-primary ">
                                                <i class="fa fa-fw" aria-hidden="true" title="Copy to use plus"></i>


                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-left pl-4">Id</th>
                                                <th>Course</th>

                                                <th class="text-center">Lecture Number</th>
                                                <th class="text-center">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left pl-4 text-muted">#345</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">

                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">John Doe</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-center d-flex justify-content-center">
                                                    <input type="text" class="form-control col-lg-6 text-center" id="input" value="4">
                                                </td>
                                                <td class="text-center">
                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger "><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left pl-4 text-muted">#347</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">

                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Ruben Tillman</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-center d-flex justify-content-center">
                                                    <input type="text" class="form-control col-lg-6 text-center" id="input" value="3">
                                                </td>
                                                <td class="text-center">

                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left pl-4 text-muted">#321</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">

                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Elliot Huber</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-center d-flex justify-content-center">
                                                    <input type="text" class="form-control col-lg-6 text-center" id="input" value="1">
                                                </td>
                                                <td class="text-center">

                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left pl-4 text-muted">#55</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">

                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Vinnie Wagstaff</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center d-flex justify-content-center">
                                                    <input type="text" class="form-control col-lg-6 text-center" id="input" value="2">
                                                </td>
                                                <td class="text-center">

                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-block d-flex justify-content-end card-footer">
                                    <button class="btn-wide btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Footer Link 1
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Footer Link 2
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="app-footer-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Footer Link 3
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <div class="badge badge-success mr-1 ml-0">
                                                <small>NEW</small>
                                            </div>
                                            Footer Link 4
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<html>