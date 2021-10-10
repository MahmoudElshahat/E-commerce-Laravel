<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/admin/images/ico/apple-icon-120.png'), false); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/admin/images/ico/favicon.ico'), false); ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css-rtl/plugins/animate/animate.css'), false); ?>">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css-rtl/vendors.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/vendors/css/weather-icons/climacons.min.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/fonts/meteocons/style.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/vendors/css/charts/morris.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/vendors/css/charts/chartist.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/vendors/css/forms/selects/select2.min.css'), false); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('assets/admin/vendors/css/charts/chartist-plugin-tooltip.css'), false); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/vendors/css/forms/toggle/switchery.min.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css-rtl/pages/chat-application.css'), false); ?>">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css-rtl/app.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css-rtl/custom-rtl.css'), false); ?>">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css-rtl/core/colors/palette-gradient.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/fonts/simple-line-icons/style.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css-rtl/core/colors/palette-gradient.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css-rtl/pages/timeline.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/vendors/css/cryptocoins/cryptocoins.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/vendors/css/extensions/datedropper.min.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/vendors/css/extensions/timedropper.min.css'), false); ?>">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/css-rtl/style-rtl.css'), false); ?>">
    <!-- END Custom CSS-->
    @notify_css
    <?php echo $__env->yieldContent('style'); ?>
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns  <?php if(Request::is('admin/users/tickets/reply*')): ?> chat-application <?php endif; ?> menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
<?php echo $__env->make('admin.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php echo $__env->make('admin.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php echo $__env->make('admin.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

@notify_js
@notify_render

<!-- BEGIN VENDOR JS-->
<script src="<?php echo e(asset('assets/admin/vendors/js/vendors.min.js'), false); ?>" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="<?php echo e(asset('assets/admin/vendors/js/tables/datatable/datatables.min.js'), false); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js'), false); ?>"
        type="text/javascript"></script>

<script src="<?php echo e(asset('assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js'), false); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js'), false); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/forms/toggle/switchery.min.js'), false); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/forms/switch.js'), false); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/forms/select/select2.full.min.js'), false); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/forms/select/form-select2.js'), false); ?>" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="<?php echo e(asset('assets/admin/vendors/js/charts/chart.min.js'), false); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/charts/echarts/echarts.js'), false); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('assets/admin/vendors/js/extensions/datedropper.min.js'), false); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/vendors/js/extensions/timedropper.min.js'), false); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('assets/admin/vendors/js/forms/icheck/icheck.min.js'), false); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/pages/chat-application.js'), false); ?>" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="<?php echo e(asset('assets/admin/js/core/app-menu.js'), false); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/core/app.js'), false); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/customizer.js'), false); ?>" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="<?php echo e(asset('assets/admin/js/scripts/pages/dashboard-crypto.js'), false); ?>" type="text/javascript"></script>


<script src="<?php echo e(asset('assets/admin/js/scripts/tables/datatables/datatable-basic.js'), false); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('assets/admin/js/scripts/extensions/date-time-dropper.js'), false); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="<?php echo e(asset('assets/admin/js/scripts/forms/checkbox-radio.js'), false); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('assets/admin/js/scripts/modal/components-modal.js'), false); ?>" type="text/javascript"></script>

<script>
    $('#meridians1').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians2').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians3').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians4').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians5').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians6').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians7').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians8').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians9').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians10').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians11').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians12').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians13').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians14').timeDropper({
        meridians: true,setCurrentTime: false
    });
</script>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/jewelry33/resources/views/layouts/admin.blade.php ENDPATH**/ ?>