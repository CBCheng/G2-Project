<?php
try {
	require_once("connectCd102g2.php");
	$sql="select * from expert,myschedule where expert.expertNo=myschedule.expertNo and share=1";
	$myschedule = $pdo->query($sql);  //productlist 是 PDOStatement物件
	
	while($myschRow = $myschedule->fetch(PDO::FETCH_ASSOC)){
		// echo "<pre>"; print_r($myschRow);echo "</pre>";
?>		
		
		<div class="mW_bigBox">
			<input type="hidden" name="mW_bigBoxNo" value="<?php echo $myschRow['memNo'];?>">
             <div class="mW_delete"><i class="fas fa-trash-alt"></i></div>
                  <div class="mW_box">
                   		<!-- <input type="hidden" value="30"> -->
                         <a href="refer.html">
                             <div class="mW_look">查看詳細</div>
                         </a>
                         <a href="planning.html">
                             <div class="mW_edit">引用行程</div>
                         </a>
                         <div class="mW_tabBox">
                             <div class="line_tab pingC_tab"><?php echo $myschRow[" expertName"];?></div>
                             <div class="mW_imgBox">
                                 <img src="img/p3_v10_05.jpg">
                             </div>
                         </div>
                         <div class="mW_txtBox">
                             <p class="mW_day"><span>4</span>天</p>
                             <p class="mW_title"><?php echo $myschRow["scheduleName"];?></p>
                             <!-- <p class="mW_lorem">彩虹湖 &gt; 巧克力山 &gt; 黃龍風景區 &gt; 紅龜麵店 &gt; 平溪老街 &gt; 十分旅人民宿</p> -->
                         </div>
                         <div class="clearFix"></div>
              		</div>
              		</div>
              		
              		
         
   <?php
	} 
	?>
	<!-- <script type="text/javascript">
		$('.mW_delete').on('click',function(){
	          var delNo = $(this).prev().val();
	          $.ajax({
	              url:'php/favorite_travel_del.php',    
	              data:{myDelNo:delNo},           
	              dataType: 'text',           
	              success: function(data){
	                  $('#m_rightBox').html(data);

	              },
	          });
	          console.log(delNo);
	    });
	</script> -->
    <?php
} catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
	echo "錯誤行號 : " , $e->getLine(), "<br>";	
}
?>