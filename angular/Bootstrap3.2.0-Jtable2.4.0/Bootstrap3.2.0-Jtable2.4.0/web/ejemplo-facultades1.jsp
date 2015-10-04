<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="jtable-2.4.0/themes/lightcolor/gray/jtable.css" rel="stylesheet" type="text/css" />
        <link href="jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" type="text/css" /> 
        <link href="validation-engine-2.6.2/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />


        <script src="jquery-1.11.1/jquery-1.11.1.js" type="text/javascript"></script>
        <script src="validation-engine-2.6.2/js/jquery.validationEngine.js" type="text/javascript"></script>
        <script src="validation-engine-2.6.2/js/jquery.validationEngine-es.js" type="text/javascript"></script>
        <script src="jquery-ui-bootstrap/js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
        <script src="jtable-2.4.0/jquery.jtable.js" type="text/javascript"></script>
        <script src="jtable-2.4.0/localization/jquery.jtable.es.js" type="text/javascript"></script>
    </head>
    <body>
        <div style="width:60%;margin-right:20%;margin-left:20%;text-align:center;">
            <div id="FacultadTableContainer"></div>
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#FacultadTableContainer').jtable({
                    useBootstrap: true,
                    title: 'Administración de Facultades',
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
                            title: 'Descripción',
                            type: 'textarea',
                            sorting: false
                        }
                    },
                    //Initialize validation logic when a form is created
                    formCreated: function (event, data) {
                        data.form.validationEngine();
                    },
                    //Validate form when it is being submitted
                    formSubmitting: function (event, data) {
                        return data.form.validationEngine('validate');
                    },
                    //Dispose validation logic when form is closed
                    formClosed: function (event, data) {
                        data.form.validationEngine('hide');
                        data.form.validationEngine('detach');
                    }

                });
                $('#FacultadTableContainer').jtable('load');
            });
        </script> 
    </body>
</html>
