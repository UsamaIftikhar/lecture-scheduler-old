<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin-Lecture</title>
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
                                <div>Lectures
                                    <div class="page-title-subheading">You can manage all Lectures from below.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Create Lecture</h5>
                                <form class="">
                                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Lecture number</label>
                                        <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="with a placeholder" type="text" class="form-control"></div>
                                    </div>
                                    <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Lecture Name</label>
                                        <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="text" class="form-control"></div>
                                    </div>
                                    <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Department</label>
                                        <div class="col-sm-10">
                                            <select name="department" id="exampleSelect" class="form-control form-select form-select-sm">
                                                <option selected>Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Course</label>
                                        <div class="col-sm-10">
                                            <select name="department" id="exampleSelect" class="form-control form-select form-select-sm">
                                                <option selected>Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
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
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<html>