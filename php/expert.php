<?php
try {
    require_once("connectExpert.php");
    $sql = "select * from expert";
    $members = $pdo->query($sql);
    $memRows = $members->fetchAll(PDO::FETCH_ASSOC);
    // echo json_encode($memRow);

  
    foreach ($memRows as $memRow) {
    	//判斷屬性
    	$aa='';
    	if($memRow["expFood"]==10){
    		$memRow["expFood"]='美食';
    		$aa .= '<div class="attr food">'.$memRow["expFood"].'</div>';
    	}else{
    		$memRow["expFood"]='';
    	}

    	if($memRow["expHuman"]==10){
    		$memRow["expHuman"]='人文';
    		$aa .= '<div class="attr human">'.$memRow["expHuman"].'</div>';
    	}else{
    		$memRow["expHuman"]='';
    	}
    	if($memRow["expSmart"]==10){
    		$memRow["expSmart"]='知性';
    		$aa .= '<div class="attr smart">'.$memRow["expSmart"].'</div>';
    	}else{
    		$memRow["expSmart"]='';
    	}
    	if($memRow["expAdven"]==10){
    		$memRow["expAdven"]='冒險';
    		$aa .= '<div class="attr adven">'.$memRow["expAdven"].'</div>';
    	}else{
    		$memRow["expAdven"]='';
    	}
    	if($memRow["expTech"]==10){
    		$memRow["expTech"]='科技';
    		$aa .= '<div class="attr tech">'.$memRow["expTech"].'</div>';
    	}else{
    		$memRow["expFood"]='';
    	}


    	//人氣加popular跟皇冠圖
    	$bb = '';
    	$cc ='';
    	if($memRow["expertPopular"]>=30){
    		$bb .= '<img class="king" src="img/expertImg/crown.png" alt="crown">';
    		$cc .= 'popular';
    	}
    	
?>		
		<div class="element-item expertBox <?php echo $memRow["planetNo"] ;?> <?php echo $cc;?>">
            <?php echo $bb ;?>
            <h2 class="h2Desk"><?php echo $memRow["planet"];?></h2>
            <h3 class="h3Desk"><?php echo $memRow["expertName"];?></h3>
            <?php echo $aa ;?> 
            <div class="pic">
                <a>
                    <img id="box" src="<?php echo $memRow["expertPic"];?>">
                </a>
                <div class="aside">
                    <h2 class="h2Ph"><?php echo $memRow["planet"];?></h2>
                    <h3 class="h3Ph"><?php echo $memRow["expertName"];?></h3>
                    <div class="score">
                        <span>5</span>
                        <img src="img/expertImg/star.png" alt="star">
                        <img src="img/expertImg/star.png" alt="star">
                        <img src="img/expertImg/star.png" alt="star">
                        <img src="img/expertImg/star.png" alt="star">
                        <img src="img/expertImg/star.png" alt="star">
                    </div>
                    <div class="mark">
                        <img src="img/expertImg/comment.png" alt="comment">
                        <span>5</span>
                        <img src="img/expertImg/love.png" alt="love">
                        <span>20</span>
                    </div>
                </div>
            </div> 
        </div>


        
        <script type="text/javascript">
        	




    	//=====跳窗開關=====
			$(function () {
				$(".expertBox").click(function () {
					$("#lightBox_father").show(500);
				})
			})
			//e.target觸發的物件 //e.currentTarget監聽的事件
			$("#lightBox_father").click(function (e) {
				if (e.target == e.currentTarget)
					$("#lightBox_father").hide(500);
			})

			$(function () {
				$(".fas").click(function () {
					$("#lightBox_father").hide(500);
				})
			})



    	// =====篩選套件isotope.js=====
			var $grid = $('.grid').isotope({
			  itemSelector: '.element-item',
			  layoutMode: 'fitRows',
			  getSortData: {
			    name: '.name',
			    symbol: '.symbol',
			    number: '.number parseInt',
			    category: '[data-category]',
			    weight: function( itemElem ) {
			      var weight = $( itemElem ).find('.weight').text();
			      return parseFloat( weight.replace( /[\(\)]/g, '') );
			    }
			  }
			});

			// filter functions
			var filterFns = {
			  // show if number is greater than 50
			  numberGreaterThan50: function() {
			    var number = $(this).find('.number').text();
			    return parseInt( number, 10 ) > 50;
			  },
			  // show if name ends with -ium
			  ium: function() {
			    var name = $(this).find('.name').text();
			    return name.match( /ium$/ );
			  }
			};

			// bind filter button click

			$('#filters').on( 'click', 'button', function() {
			  var filterValue = $( this ).attr('data-filter');
			  // use filterFn if matches value
			  filterValue = filterFns[ filterValue ] || filterValue;
			  $grid.isotope({ filter: filterValue });
			});


			// bind sort button click
			$('#sorts').on( 'click', 'button', function() {
			  var sortByValue = $(this).attr('data-sort-by');
			  $grid.isotope({ sortBy: sortByValue });
			});

			// change is-checked class on buttons
			$('.button-group').each( function( i, buttonGroup ) {
			  var $buttonGroup = $( buttonGroup );
			  $buttonGroup.on( 'click', 'button', function() {
			    $buttonGroup.find('.is-checked').removeClass('is-checked');
			    $( this ).addClass('is-checked');
			  });
			});
			// });
			  



        </script>
	
<?php
    }
} catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>