<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin-Departments</title>
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
                                <div>Departments
                                    <div class="page-title-subheading">You can manage all departments from below.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Create Department</h5>
                                <form class="">
                                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Department Name</label>
                                        <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="with a placeholder" type="text" class="form-control"></div>
                                    </div>
                                    <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Department Head</label>
                                        <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="text" class="form-control"></div>
                                    </div>

                                    <div class="position-relative row form-check">
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-secondary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4">
                        <h6>Following departments has been registered</h6>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-5 card" style="padding-bottom:10px;">
                                <div class="card-header">Departments
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">

                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-left pl-4">Id</th>
                                                <th>Name</th>
                                                <th class="text-center">Department Head</th>
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
                                            </tr>
                                        </tbody>
                                    </table>
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