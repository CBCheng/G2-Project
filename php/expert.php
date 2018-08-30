<?php
try {
    require_once("connectExpert.php");
    $sql = "select * from expert";
    $members = $pdo->query($sql);
    $memRows = $members->fetchAll(PDO::FETCH_ASSOC);
    // echo json_encode($memRow);
    foreach ($memRows as $memRow) {
?>		
		<div class="element-item expertBox blue popular ">
            <img class="king" src="img/expertImg/crown.png" alt="crown">
            <h2 class="h2Desk"><?php echo $memRow["planet"];?></h2>
            <h3 class="h3Desk"><?php echo $memRow["expertName"];?></h3>
            <div class="attr">美食</div>
            <div class="pic">
                <a>
                    <img id="box" src="img/expertImg/expPic/101.jpg">
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
    	// =====跳窗開關=====
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

		

    	<!-- echo '<h2 class ="h2Desk">', $memRow['planet'], '</h2>',
			 '<h3 class ="h3Desk">', $memRow['expertName'], '</h3>';
			
        echo '<h2 class ="h2Desk">', $memRow['planet'], '</h2>';
        echo '<h3 class ="h3Desk">', $memRow['expertName'], '</h3>'; -->
<?php
    }
} catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>