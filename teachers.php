<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin-Teachers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">
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
            require_once('./admin-sidebar.php');
            Sidebar($currentPage);
            ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-graph text-success">
                                    </i>
                                </div>
                                <div>Teachers
                                    <div class="page-title-subheading">You can manage all teachers from below.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="pb-4 d-flex justify-content-between">
                        <h6 style="padding-top: 10px;">Following teachers has been registered</h6>
                        <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-4 card" style="padding-bottom:10px;">
                                <div class="card-header">Teachers
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">

                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive pb-2">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-left pl-4">Id</th>
                                                <th>Name</th>
                                                <th class="text-center">Department</th>
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

                                                <td>
                                                    <div class="widget-content-right flex2">
                                                        <div class="text-center">John Doe</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-primary "><i class="pe-7s-pen btn-icon-wrapper"> </i></button>
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

                                                <td class="text-center">
                                                    <div class="widget-content-right flex2">
                                                        <div class="text-center">John Doe</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-primary "><i class="pe-7s-pen btn-icon-wrapper"> </i></button>
                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger "><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
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

                                                <td class="text-center">
                                                    <div class="widget-content-right flex2">
                                                        <div class="text-center">John Doe</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-primary "><i class="pe-7s-pen btn-icon-wrapper"> </i></button>
                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger "><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
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
                                                <td class="text-center">
                                                    <div class="widget-content-right flex2">
                                                        <div class="text-center">John Doe</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-primary "><i class="pe-7s-pen btn-icon-wrapper"> </i></button>
                                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger "><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                                
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <nav class="d-flex justify-content-center" aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                                    <li class="page-item active"><a href="javascript:void(0);" class="page-link">2</a></li>
                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                                    <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                                    <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                                </ul>
                            </nav>
                            </div>

                         
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