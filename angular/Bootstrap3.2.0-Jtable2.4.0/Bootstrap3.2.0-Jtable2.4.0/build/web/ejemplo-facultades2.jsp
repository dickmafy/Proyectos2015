<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-3.2.0/theme-default/bootstrap.min.css" rel="stylesheet">

        <link href="jtable-2.4.0/themes/lightcolor/gray/jtable.css" rel="stylesheet" type="text/css" />
        <link href="jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" type="text/css" /> 
        <link href="validation-engine-2.6.2/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
        <style>
            body {
                padding-top: 50px;
            }
            .starter-template {
                padding: 40px 15px;
                text-align: center;
            }

            select,select > option{
                color: black;
            }
        </style>

        <script src="jquery-1.11.1/jquery-1.11.1.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container">

            <div class="starter-template">
                <h1>Bootstrap starter template</h1>
                <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
            </div>

        </div>

        <div style="width:60%;margin-right:20%;margin-left:20%;text-align:center;">
            <div id="TableContainer"></div>
        </div>
        
        <div style="width:60%;margin-right:20%;margin-left:20%;text-align:center;">
            <div id="FacultadTableContainer"></div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#FacultadTableContainer').jtable({
                    useBootstrap: true,
                    title: 'Administraci�n de Facultades',
                    paging: true,
                    pageSize: 5,
                    sorting: true,
                    defaultSorting: 'nombre ASC',
                    actions: {
                        listAction: 'servFacultades?action=list',
                        createAction: 'servFacultades?action=create',
                        updateAction: 'servFacultades?action=update',
                        deleteAction: 'servFacultades?action=delete'
                    },
                    fields: {
                        idfacultad: {
                            key: true,
                            create: false,
                            edit: false,
                            list: false
                        },
                        nombre: {
                            title: 'Nombre',
                            inputClass: 'validate[required]'
                        },
                        descripcion: {
                            title: 'Descripci�n',
                            type: 'textarea',
                            sorting: false
                        }
                    },
                    //Initialize validation logic when a form is created
                    formCreated: function(event, data) {
                        data.form.validationEngine();
                    },
                    //Validate form when it is being submitted
                    formSubmitting: function(event, data) {
                        return data.form.validationEngine('validate');
                    },
                    //Dispose validation logic when form is closed
                    formClosed: function(event, data) {
                        data.form.validationEngine('hide');
                        data.form.validationEngine('detach');
                    }

                });
                $('#FacultadTableContainer').jtable('load');
            });
        </script> 
        
        <script src="bootstrap-3.2.0/js/bootstrap.min.js"></script>
        
        <script src="validation-engine-2.6.2/js/jquery.validationEngine.js" type="text/javascript"></script>
        <script src="validation-engine-2.6.2/js/jquery.validationEngine-es.js" type="text/javascript"></script>
        <script src="jquery-ui-bootstrap/js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
        <script src="jtable-2.4.0/jquery.jtable.js" type="text/javascript"></script>
        <script src="jtable-2.4.0/localization/jquery.jtable.es.js" type="text/javascript"></script>
    </body>
</html>
