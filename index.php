<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>صنع وظائف لvrp - أصيل شرواني</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script>
function copy() {
    let textarea = document.getElementById("textarea");
    textarea.select();
    document.execCommand("copy");
}
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({
                                              google_ad_client: "ca-pub-0932277965476466",
                                              enable_page_level_ads: true
                                              });
</script>
</head>

<body>

	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">

		</div>
	</div>
	<!-- /navbar -->



		<!-- Page content -->
	 	<div class="page-container" style="  padding-left: 40px; padding-right: 40px;">


			<!-- Page header -->
			<div class="page-header">
				<div class="page-title">
					<h3></h3>
				</div>
			</div>
			<!-- /page header -->

<?php
    $code = "";
    $error = "";
    if(isset($_POST['submit'])){ //check if form was submitted
        $job = $_POST['job']; //get input text
        $PofA = $_POST['PofA']; //get input text
        $AofA = $_POST['AofA']; //get input text
        $x1 = $_POST['x1']; //get input text
        $y1 = $_POST['y1']; //get input text
        $z1 = $_POST['z1']; //get input text

        $PofB = $_POST['PofB']; //get input text
        $AofB = $_POST['AofB']; //get input text
        $x2 = $_POST['x2']; //get input text
        $y2 = $_POST['y2']; //get input text
        $z2 = $_POST['z3']; //get input text
        
        $PofC = $_POST['PofC']; //get input text
        $AofC = $_POST['AofC']; //get input text
        $x3 = $_POST['x3']; //get input text
        $y3 = $_POST['y3']; //get input text
        $z3 = $_POST['z3']; //get input text
        //3
        $nameitem1 = $_POST['nameitem1']; //get input text
        $Itemdescription1 = $_POST['Itemdescription1']; //get input text
        $quantityItem1 = $_POST['quantityItem1']; //get input text
        //3
        $nameitem2 = $_POST['nameitem2']; //get input text
        $Itemdescription2 = $_POST['Itemdescription2']; //get input text
        $quantityItem2 = $_POST['quantityItem2']; //get input text


        $permissions = $_POST['permissions']; //get input text
        $code ='-----------------------وظيفة '.$job.' ------------------------------
        -----------------------الخطو الاولى ---------------------------------
        -----------------------ادخل على ملف --------------------------------
        ----------------vrp\cfg\item_transformers.lua-----------------
        -----------------------------انسخ هذا الكود :--------------------------
        --------------------والصقة داخل الملف في النص ---------------------
        
        
        
        {
            name="'.$PofA.'", -- menu name
            permissions = {"mission.collect.'.$permissions.'"}, -- you can add permissions
            r=0,g=125,b=255, -- color
            max_units=100000,
            units_per_minute=100000,
            x='.$x1.',y='.$y1.',z='.$z1.',
            radius=3, height=1.5, -- area
            recipes = {
                ["'.$PofA.'"] = { -- action name
                    description="'.$PofA.'", -- action description
                    in_money='.$AofA.', -- money taken per unit
                    out_money=0, -- money earned per unit
                    reagents={}, -- items taken per unit
                    products={ -- items given per unit
                        ["'.$permissions.'1"] = '.$quantityItem1.'
                    }
                }
            }
        },
        {
            name="'.$PofB.'", -- menu name
            permissions = {"mission.collect.'.$permissions.'"}, -- you can add permissions
            r=0,g=125,b=255, -- color
            max_units=100000,
            units_per_minute=100000,
            x='.$x2.',y='.$y2.',z='.$z2.',
            radius=3, height=1.5, -- area
            recipes = {
                ["'.$PofB.'"] = { -- action name
                    description="'.$PofB.'", -- action description
                    in_money='.$AofB.', -- money taken per unit
                    out_money=0, -- money earned per unit
                    reagents={ -- items taken per unit
                        ["'.$permissions.'1"] = '.$quantityItem1.'
                    },
                    products={ -- items given per unit
                        ["'.$permissions.'2"] = '.$quantityItem2.'
                    }
                }
            }
        },
        {
            name="'.$PofC.'", -- menu name
            permissions = {"mission.collect.'.$permissions.'"}, -- you can add permissions
            r=0,g=125,b=255, -- color
            max_units=100000,
            units_per_minute=100000,
            x='.$x3.',y='.$y3.',z='.$z3.',
            radius=2, height=1.5, -- area
            recipes = {
                ["'.$PofC.'"] = { -- action name
                    description="'.$PofC.'", -- action description
                    in_money=0, -- money taken per unit
                    out_money='.$AofC.', -- money earned per unit
                    reagents={ -- items taken per unit
                        ["'.$permissions.'2"] = '.$quantityItem2.'
                    },
                    products={ -- items given per unit
                    }
                }
            }
        },
        
        
        
        -------------------------------------------------------------------------------------------------------
        ------------------------الخطو الثانية ------------------------
        ----------------------تفتح هذا الملف ------------------------
        -------------------vrp\cfg\items.lua--------------------
        تنسخ هذا الكود وتحطه في الملف
        
        [".$permissions1."] = {"'.$nameitem1.'","'.$Itemdescription1.'", nil,9.5},
        [".$permissions2."] = {"'.$nameitem2.'","'.$Itemdescription2.'", nil,4.5},
        
        
        
        ----------------------------------------------------------------------------------------------------------
        --------------------الخطوة الثالثة -------------------
        -------------------تفتح هذا الملف ------------------
        ---------------vrp\cfg\groups.lua--------------
        وتنسخ هذا الكود وتحطة فيهذا  الملف
        
        ["'.$job.'"] = {
            _config = { gtype = "job",
                onspawn = function(player) vRPclient.notify(player,{"You are mahrab qatun."}) end
            },
            "mission.collect.'.$permissions.'"
        },
        
        
        ---------------------------------------------------------------------------------------------------------
        ---------------------الخطوة الاخيرة --------------------
        ----------------------تفتح ملف -----------------------
        ----------vrp\cfg\blips_markers-------------------
        -------------تنسخ الاكواد وتلصق----------------------
        ----------------تلصقها تحت -------------------------
        ----------------blips--------------------
        
        
        { '.$x1.','.$y1.','.$z1.',141,25,"'.$job.'"},-- '.$job.'
        {'.$x2.','.$y1.','.$z2.',141,25,"'.$job.'"},-- '.$job.'
        {'.$x3.','.$y1.','.$z3.',141,25,"'.$job.'"},-- '.$job.'
        
        --------------------------------------------------------------------------------------------------------------
        
        -----------تلصقها تحت -------------------
        -----------markers-------------------
        
        {'.$x1.','.$y1.','.$z1.',1,1,5,204,204,0,150,35}, -- '.$job.'
        {'.$x2.','.$y2.','.$z2.',1,1,5,204,204,0,150,35}, -- '.$job.'
        {'.$x3.','.$y3.','.$z3.',1,1,5,204,204,0,150,35}, -- '.$job.'
        
        ---------------------------------------------------------------------------------------------------------------';
    }else{
        
        $error = "عبي كل الحقول";
    }
    ?>
<!-- Callout -->
<?php if(isset($_POST['submit']) && $error != ''){
    echo '<div class="callout callout-danger fade in">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <h5>خطا</h5>
    <p>'.$error.'</p>
    </div>';
}
    ?>
    <!-- /callout -->


			<!-- Vertical form outside panel -->
			<form role="form" action="#" method="post">
	            <div class="block">
	                <h6 class="heading-hr">صنع وظائف لvrp</h6>

			        <div class="form-group">
			            <label>اسم الوظيفة</label>
		            	<input type="text" class="form-control" name="job">
			        </div>

			        <div class="form-group">
			            <label>مكان التجميع ومبلغ التجميع</label>
									<input type="text" class="form-control" placeholder="اسم مكان التجميع مثلا جمع بعض القات" name="PofA">
									<input type="text" class="form-control" placeholder="المبلغ المطلوب للتجميع مثلا   1500"  name="AofA">
			        </div>
<div class="form-group">
<label>الاحداثيات </label>
<div class="row">
<div class="col-sm-4">
<input type="text" class="form-control" placeholder="z" name="z1">
<span class="help-block text-right">z</span>
</div>

<div class="col-sm-4">
<input type="text" class="form-control" placeholder="y" name="y1">
<span class="help-block text-center">y</span>
</div>
<div class="col-sm-4">
<input type="text" class="form-control" placeholder="x" name="x1">
<span class="help-block">x</span>
</div>
</div>
</div>

                    <div class="form-group">
                        <label>مكان التحويل ومبلغ التحويل</label>
                        <input type="text" class="form-control" placeholder="اسم مكان التحويل مثلا تنظيف قات." name="PofB">
                        <input type="text" class="form-control" placeholder="المبلغ المطلوب للتحويل مثلا   1500"  name="AofB">
                    </div>
<div class="form-group">
<label>الاحداثيات </label>
<div class="row">
<div class="col-sm-4">
<input type="text" class="form-control" placeholder="z" name="z2">
<span class="help-block text-right">z</span>
</div>

<div class="col-sm-4">
<input type="text" class="form-control" placeholder="y" name="y2">
<span class="help-block text-center">y</span>
</div>
<div class="col-sm-4">
<input type="text" class="form-control" placeholder="x" name="x2">
<span class="help-block">x</span>
</div>
</div>
</div>


							<div class="form-group">
			            <label>مكان البيع ومبلغ البيع</label>
                        <input type="text" class="form-control" placeholder="اسم مكان البيع مثلا بيع القات" name="PofC">
                        <input type="text" class="form-control" placeholder="مبلغ البيع مثلا 1500"  name="AofC">
			        </div>
<div class="form-group">
<label>الاحداثيات </label>
<div class="row">
<div class="col-sm-4">
<input type="text" class="form-control" placeholder="z" name="z3">
<span class="help-block text-right">z</span>
</div>

<div class="col-sm-4">
<input type="text" class="form-control" placeholder="y" name="y3">
<span class="help-block text-center">y</span>
</div>
<div class="col-sm-4">
<input type="text" class="form-control" placeholder="x" name="x3">
<span class="help-block">x</span>
</div>
</div>
</div>

							<div class="form-group">
									<label>permissions</label>
									<input type="text" class="form-control" name="permissions">
							</div>

<div class="form-group">
<label>اعدادات الغرض الاول</label>
<div class="row">
<div class="col-sm-6">

<input type="text" class="form-control"  placeholder="وصف الغرض الاول مثلا قات غير نظيف"  name="Itemdescription1">
</div>


<div class="col-sm-5">
<input type="text" class="form-control"  placeholder="اسم الغرض الاول مثلا قات" name="nameitem1">
</div>
<div class="col-md-1">

<input type="text" class="form-control" placeholder="1"  name="quantityItem1">
</div>
</div>
</div>

							<div class="form-group">
								  <label>اعدادات الغرض الثاني</label>
<div class="row">


<div class="col-sm-6">

									<input type="text" class="form-control"  placeholder="وصف الغرض الثاني مثلا قات جاهز للبيع"  name="Itemdescription2">
</div>
<div class="col-sm-5">
<input type="text" class="form-control"  placeholder="اسم الغرض الثاني مثلا قات نظيف" name="nameitem2">
</div>

<div class="col-md-1">

<input type="text" class="form-control" placeholder="1"  name="quantityItem2">
</div>
</div>
							</div>


                    <div class="form-actions text-right">
                    	<input type="submit" name="submit" value="إصنع" class="btn btn-primary">
                    </div>

				</div>
			</form>
			<!-- /vertical form outside panel -->



			<!-- Static control -->
	            <div class="panel panel-default">
	                <div class="panel-heading"><h6 class="panel-title"><i class="icon-paragraph-justify2"></i> اكواد الوظيفة</h6></div>
	                <div class="panel-body">


				        <div class="form-group">
				            <div class="col-sm-14">
                                <textarea id="textarea" rows="9" cols="9" class="form-control" placeholder="Add comments"><?php echo $code; ?></textarea>
				            </div>
				        </div>
<div class="form-actions text-right">
<input onclick="copy()" type="submit" value="نسخ الاكواد" class="btn btn-primary">
</div>

				    </div>
				</div>
			<!-- /static control -->


	        <!-- Footer -->
	        <div class="footer clearfix">
		        <div class="pull-left">جميع الحقوق محفوظه أصيل شرواني &copy;</div>
                <div class="pull-right">
<?php
    
    if (file_exists('count_file.txt'))
    {
        $fil = fopen('count_file.txt', r);
        $dat = fread($fil, filesize('count_file.txt'));
        echo $dat+1;
        fclose($fil);
        $fil = fopen('count_file.txt', w);
        fwrite($fil, $dat+1);
    }
    
    else
    {
        $fil = fopen('count_file.txt', w);
        fwrite($fil, 1);
        echo '1';//هنا عدد الزوار الذى زاروا الصفحة
        fclose($fil);
    }
    
    ?> ​</div>

	        </div>
	        <!-- /footer -->


		</div>
		<!-- /page content -->




</body>
</html>
