<?php
try{
    $dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
    $user = "cheng2";
    $password = "9453";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO( $dsn, $user, $password, $options);
    
    //判斷天數
    $day = "";
    $sql2 = "select datediff(arrTime,depTime) as Subtract from myschedule where share = 1 ORDER BY scheduleNo DESC";
    $unplus = $pdo->query($sql2);
    $unpluss = $unplus->fetchAll(PDO::FETCH_ASSOC);
    foreach ($unpluss as $key => $data){
        $day .= $data['Subtract']+1 . "@";
    }
    $dayArr = explode("@",$day);
    // print $dayArr[1];

    
    //印出所有分享行程
    $sql = "select * from myschedule where share = 1 ORDER BY scheduleNo DESC";
    $refers = $pdo->query($sql);
    $refRows = $refers->fetchAll(PDO::FETCH_ASSOC);

    foreach ($refRows as $key => $refRow) {
        $refPlanet = '';
        if($refRow["planetName"] == '瓦特星'){
            $refPlanet = 'blue';
        }elseif($refRow["planetName"] == '達沙星'){
            $refPlanet = 'orange';
        }else{
            $refPlanet = 'green';
        }

        $pop = '';
        if($refRow["collectNum"] >= '50'){
            $pop = ' popular';
        }else{
            $pop = '';            
        }
        // echo $pop;
?>

<!-- <div class="element-item tripBox new blue"> -->
        <div class="element-item tripBox <?php echo $refPlanet; echo $pop;?>">
            <input type="hidden" name="scheduleNo" value="<?php echo $refRow["scheduleNo"] ?>">
            <div class="tripPic">
                <a href="referdetial.php?scheduleNo=<?php echo $refRow["scheduleNo"] ?>">
                    <img src="img/shareUpload/<?php echo $refRow["ItineraryPic"] ?>">
                <div class="tripTag">
                    <span class="tripPlanet <?php echo $refPlanet ?>"><?php echo $refRow["planetName"] ?></span>
                    <!-- <span class="tripKind adventure">冒險</span> -->
                </div>
                
                
                <div class="tripIcon">
                    <div class="tripMessage">
                        <img src="img/icon/speech-bubbles-comment-option-blue.png">
                        <p><?php echo $refRow["messageNum"] ?>留言</p>
                    </div>
                    <!-- <div class="tripCollect">
                        <img src="img/icon/like-red.png">
                        <p>收藏</p>
                    </div> -->
                </div>
                </a>
                <a class="grad" href="referdetial.php?scheduleNo=<?php echo $refRow["scheduleNo"] ?>"></a>
            </div>
            <div class="tripTxt">
                    <h4><span><?php echo $dayArr[$key] ?>天</span><?php echo $refRow["scheduleName"] ?></h4>
            </div>
        </div>



        <script>
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
        </script>


<?php
    }
} catch (PODException $e) {
    echo "錯誤原因 : " , $e->getMessage(), "<br>";
    echo "錯誤行號 : " , $e->getLine(), "<br>";	
}
?>