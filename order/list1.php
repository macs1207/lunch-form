                                        <h3>幸福好食堂(9折)</h3>
										<p>
                                        	<label>餐點</label>
                                            <?php echo ("<form action=\"/order/db$choice.php\" method=\"post\">"); ?>
                                            	<?php echo ("<input type=\"hidden\" name=\"dayNum\" value=\"$dayNum\"></input>"); ?>
                                            	<?php echo ("<input type=\"hidden\" name=\"day\" value=\"$day\"></input>"); ?>
                                            	<?php echo ("<input type=\"hidden\" name=\"week\" value=\"$week\"></input>"); ?>
                                            	<?php echo ("<input type=\"hidden\" name=\"class\" value=\"$class\"></input>"); ?>
                                            	<?php echo ("<select name=\"".$day."[]\" id=\"$day-1\" onChange=\"display('$day-2')\">"); ?>
													<option value="">餐點１</option>
	                                                <optgroup label="飯類">
   														<option>肉燥飯 35元</option>
   														<option>雞肉飯 45元</option>
   														<option>柴魚飯 45元</option>
   														<option>爌肉飯 50元</option>
   														<option>咖哩飯 60元</option>
   														<option>香腸炒飯 50元</option>
   														<option>火腿炒飯 50元</option>
   														<option>排骨燴飯 60元</option>
                                                        <option>蔥爆豬柳飯 60元</option>
                                                        <option>蔥爆雞柳飯 60元</option>
                                                    <optgroup label="麵類">
    													<option>麻醬麵 45元</option>
    												    <option>陽春麵 35元</option>
    												    <option>排骨麵 60元</option>
    												    <option>泡菜辣麵 60元</option>
    												    <option>義大利麵（白醬） 70元</option>
    												    <option>義大利麵（青醬） 70元</option>
    												    <option>榨菜肉絲麵 50元</option>
    												    <option>鍋燒意麵 60元</option>
    												    <option>鍋燒泡麵 60元</option>
    												    <option>鍋燒冬粉 60元</option>
    												    <option>鍋燒烏龍 60元</option>
    												    <option>鍋燒雞絲 60元</option>
    												<optgroup label="粥類">
    												    <option>皮蛋瘦肉粥 60元</option>
    												<optgroup label="飲料">
    												    <option>紅茶（大） 20元</option>
    												    <option>冬瓜茶（大） 20元</option>
    												    <option>鮮奶茶（大） 30元</option>
    												<optgroup label="湯品">
    												    <option>紫菜湯 15元</option>
    												    <option>魚丸湯 20元</option>
    												    <option>貢丸湯 20元</option>
    												    <option>蛤蜊湯 30元</option>
    												<optgroup label="其他">
    												    <option>手工水餃（10粒） 40元</option>    												    
                                                        <option>韓式泡菜水餃（10粒） 65元</option>
														<option>燙青菜 30元</option>
                        				  		</select>
                                            	<?php echo ("<select name=\"".$day."[]\" id=\"$day-2\" style=\"display:none\" onChange=\"display('$day-3')\">"); ?>
													<option value="">餐點２</option>
                                                    <optgroup label="飯類">
   														<option>肉燥飯 35元</option>
   														<option>雞肉飯 45元</option>
   														<option>柴魚飯 45元</option>
   														<option>爌肉飯 50元</option>
   														<option>咖哩飯 60元</option>
   														<option>香腸炒飯 50元</option>
   														<option>火腿炒飯 50元</option>
   														<option>排骨燴飯 60元</option>
                                                        <option>蔥爆豬柳飯 60元</option>
                                                        <option>蔥爆雞柳飯 60元</option>
                                                    <optgroup label="麵類">
    													<option>麻醬麵 45元</option>
    												    <option>陽春麵 35元</option>
    												    <option>排骨麵 60元</option>
    												    <option>泡菜辣麵 60元</option>
    												    <option>義大利麵（白醬） 70元</option>
    												    <option>義大利麵（青醬） 70元</option>
    												    <option>榨菜肉絲麵 50元</option>
    												    <option>鍋燒意麵 60元</option>
    												    <option>鍋燒泡麵 60元</option>
    												    <option>鍋燒冬粉 60元</option>
    												    <option>鍋燒烏龍 60元</option>
    												    <option>鍋燒雞絲 60元</option>
    												<optgroup label="粥類">
    												    <option>皮蛋瘦肉粥 60元</option>
    												<optgroup label="飲料">
    												    <option>紅茶（大） 20元</option>
    												    <option>冬瓜茶（大） 20元</option>
    												    <option>鮮奶茶（大） 30元</option>
    												<optgroup label="湯品">
    												    <option>紫菜湯 15元</option>
    												    <option>魚丸湯 20元</option>
    												    <option>貢丸湯 20元</option>
    												    <option>蛤蜊湯 30元</option>
    												<optgroup label="其他">
    												    <option>手工水餃（10粒） 40元</option>    												    
                                                        <option>韓式泡菜水餃（10粒） 65元</option>
														<option>燙青菜 30元</option>
												</select>
                                            	<?php echo ("<select name=\"".$day."[]\" id=\"$day-3\" style=\"display:none\" onChange=\"display('$day-4')\">"); ?>
													<option value="">餐點３</option>
                                                    <optgroup label="飯類">
   														<option>肉燥飯 35元</option>
   														<option>雞肉飯 45元</option>
   														<option>柴魚飯 45元</option>
   														<option>爌肉飯 50元</option>
   														<option>咖哩飯 60元</option>
   														<option>香腸炒飯 50元</option>
   														<option>火腿炒飯 50元</option>
   														<option>排骨燴飯 60元</option>
                                                        <option>蔥爆豬柳飯 60元</option>
                                                        <option>蔥爆雞柳飯 60元</option>
                                                    <optgroup label="麵類">
    													<option>麻醬麵 45元</option>
    												    <option>陽春麵 35元</option>
    												    <option>排骨麵 60元</option>
    												    <option>泡菜辣麵 60元</option>
    												    <option>義大利麵（白醬） 70元</option>
    												    <option>義大利麵（青醬） 70元</option>
    												    <option>榨菜肉絲麵 50元</option>
    												    <option>鍋燒意麵 60元</option>
    												    <option>鍋燒泡麵 60元</option>
    												    <option>鍋燒冬粉 60元</option>
    												    <option>鍋燒烏龍 60元</option>
    												    <option>鍋燒雞絲 60元</option>
    												<optgroup label="粥類">
    												    <option>皮蛋瘦肉粥 60元</option>
    												<optgroup label="飲料">
    												    <option>紅茶（大） 20元</option>
    												    <option>冬瓜茶（大） 20元</option>
    												    <option>鮮奶茶（大） 30元</option>
    												<optgroup label="湯品">
    												    <option>紫菜湯 15元</option>
    												    <option>魚丸湯 20元</option>
    												    <option>貢丸湯 20元</option>
    												    <option>蛤蜊湯 30元</option>
    												<optgroup label="其他">
    												    <option>手工水餃（10粒） 40元</option>    												    
                                                        <option>韓式泡菜水餃（10粒） 65元</option>
														<option>燙青菜 30元</option>
												</select>
                                            	<?php echo ("<select name=\"".$day."[]\" id=\"$day-4\" style=\"display:none\" onChange=\"display('$day-5')\">"); ?>
													<option value="">餐點４</option>
                                                    <optgroup label="飯類">
   														<option>肉燥飯 35元</option>
   														<option>雞肉飯 45元</option>
   														<option>柴魚飯 45元</option>
   														<option>爌肉飯 50元</option>
   														<option>咖哩飯 60元</option>
   														<option>香腸炒飯 50元</option>
   														<option>火腿炒飯 50元</option>
   														<option>排骨燴飯 60元</option>
                                                        <option>蔥爆豬柳飯 60元</option>
                                                        <option>蔥爆雞柳飯 60元</option>
                                                    <optgroup label="麵類">
    													<option>麻醬麵 45元</option>
    												    <option>陽春麵 35元</option>
    												    <option>排骨麵 60元</option>
    												    <option>泡菜辣麵 60元</option>
    												    <option>義大利麵（白醬） 70元</option>
    												    <option>義大利麵（青醬） 70元</option>
    												    <option>榨菜肉絲麵 50元</option>
    												    <option>鍋燒意麵 60元</option>
    												    <option>鍋燒泡麵 60元</option>
    												    <option>鍋燒冬粉 60元</option>
    												    <option>鍋燒烏龍 60元</option>
    												    <option>鍋燒雞絲 60元</option>
    												<optgroup label="粥類">
    												    <option>皮蛋瘦肉粥 60元</option>
    												<optgroup label="飲料">
    												    <option>紅茶（大） 20元</option>
    												    <option>冬瓜茶（大） 20元</option>
    												    <option>鮮奶茶（大） 30元</option>
    												<optgroup label="湯品">
    												    <option>紫菜湯 15元</option>
    												    <option>魚丸湯 20元</option>
    												    <option>貢丸湯 20元</option>
    												    <option>蛤蜊湯 30元</option>
    												<optgroup label="其他">
    												    <option>手工水餃（10粒） 40元</option>    												    
                                                        <option>韓式泡菜水餃（10粒） 65元</option>
														<option>燙青菜 30元</option>
												</select>
                                            	<?php echo ("<select name=\"".$day."[]\" id=\"$day-5\" style=\"display:none\" onChange=\"display('$day-6')\">"); ?>
													<option value="">餐點５</option>
                                                    <optgroup label="飯類">
   														<option>肉燥飯 35元</option>
   														<option>雞肉飯 45元</option>
   														<option>柴魚飯 45元</option>
   														<option>爌肉飯 50元</option>
   														<option>咖哩飯 60元</option>
   														<option>香腸炒飯 50元</option>
   														<option>火腿炒飯 50元</option>
   														<option>排骨燴飯 60元</option>
                                                        <option>蔥爆豬柳飯 60元</option>
                                                        <option>蔥爆雞柳飯 60元</option>
                                                    <optgroup label="麵類">
    													<option>麻醬麵 45元</option>
    												    <option>陽春麵 35元</option>
    												    <option>排骨麵 60元</option>
    												    <option>泡菜辣麵 60元</option>
    												    <option>義大利麵（白醬） 70元</option>
    												    <option>義大利麵（青醬） 70元</option>
    												    <option>榨菜肉絲麵 50元</option>
    												    <option>鍋燒意麵 60元</option>
    												    <option>鍋燒泡麵 60元</option>
    												    <option>鍋燒冬粉 60元</option>
    												    <option>鍋燒烏龍 60元</option>
    												    <option>鍋燒雞絲 60元</option>
    												<optgroup label="粥類">
    												    <option>皮蛋瘦肉粥 60元</option>
    												<optgroup label="飲料">
    												    <option>紅茶（大） 20元</option>
    												    <option>冬瓜茶（大） 20元</option>
    												    <option>鮮奶茶（大） 30元</option>
    												<optgroup label="湯品">
    												    <option>紫菜湯 15元</option>
    												    <option>魚丸湯 20元</option>
    												    <option>貢丸湯 20元</option>
    												    <option>蛤蜊湯 30元</option>
    												<optgroup label="其他">
    												    <option>手工水餃（10粒） 40元</option>    												    
                                                        <option>韓式泡菜水餃（10粒） 65元</option>
														<option>燙青菜 30元</option>
												</select>
                                            	<?php echo ("<select name=\"".$day."[]\" id=\"$day-6\" style=\"display:none\" onChange=\"display('$day-7')\">"); ?>
													<option value="">餐點６</option>
                                                    <optgroup label="飯類">
   														<option>肉燥飯 35元</option>
   														<option>雞肉飯 45元</option>
   														<option>柴魚飯 45元</option>
   														<option>爌肉飯 50元</option>
   														<option>咖哩飯 60元</option>
   														<option>香腸炒飯 50元</option>
   														<option>火腿炒飯 50元</option>
   														<option>排骨燴飯 60元</option>
                                                        <option>蔥爆豬柳飯 60元</option>
                                                        <option>蔥爆雞柳飯 60元</option>
                                                    <optgroup label="麵類">
    													<option>麻醬麵 45元</option>
    												    <option>陽春麵 35元</option>
    												    <option>排骨麵 60元</option>
    												    <option>泡菜辣麵 60元</option>
    												    <option>義大利麵（白醬） 70元</option>
    												    <option>義大利麵（青醬） 70元</option>
    												    <option>榨菜肉絲麵 50元</option>
    												    <option>鍋燒意麵 60元</option>
    												    <option>鍋燒泡麵 60元</option>
    												    <option>鍋燒冬粉 60元</option>
    												    <option>鍋燒烏龍 60元</option>
    												    <option>鍋燒雞絲 60元</option>
    												<optgroup label="粥類">
    												    <option>皮蛋瘦肉粥 60元</option>
    												<optgroup label="飲料">
    												    <option>紅茶（大） 20元</option>
    												    <option>冬瓜茶（大） 20元</option>
    												    <option>鮮奶茶（大） 30元</option>
    												<optgroup label="湯品">
    												    <option>紫菜湯 15元</option>
    												    <option>魚丸湯 20元</option>
    												    <option>貢丸湯 20元</option>
    												    <option>蛤蜊湯 30元</option>
    												<optgroup label="其他">
    												    <option>手工水餃（10粒） 40元</option>    												    
                                                        <option>韓式泡菜水餃（10粒） 65元</option>
														<option>燙青菜 30元</option>
												</select>
                                            	<?php echo ("<select name=\"".$day."[]\" id=\"$day-7\" style=\"display:none\" onChange=\"display('$day-8')\">"); ?>
													<option value="">餐點７</option>
                                                    <optgroup label="飯類">
   														<option>肉燥飯 35元</option>
   														<option>雞肉飯 45元</option>
   														<option>柴魚飯 45元</option>
   														<option>爌肉飯 50元</option>
   														<option>咖哩飯 60元</option>
   														<option>香腸炒飯 50元</option>
   														<option>火腿炒飯 50元</option>
   														<option>排骨燴飯 60元</option>
                                                        <option>蔥爆豬柳飯 60元</option>
                                                        <option>蔥爆雞柳飯 60元</option>
                                                    <optgroup label="麵類">
    													<option>麻醬麵 45元</option>
    												    <option>陽春麵 35元</option>
    												    <option>排骨麵 60元</option>
    												    <option>泡菜辣麵 60元</option>
    												    <option>義大利麵（白醬） 70元</option>
    												    <option>義大利麵（青醬） 70元</option>
    												    <option>榨菜肉絲麵 50元</option>
    												    <option>鍋燒意麵 60元</option>
    												    <option>鍋燒泡麵 60元</option>
    												    <option>鍋燒冬粉 60元</option>
    												    <option>鍋燒烏龍 60元</option>
    												    <option>鍋燒雞絲 60元</option>
    												<optgroup label="粥類">
    												    <option>皮蛋瘦肉粥 60元</option>
    												<optgroup label="飲料">
    												    <option>紅茶（大） 20元</option>
    												    <option>冬瓜茶（大） 20元</option>
    												    <option>鮮奶茶（大） 30元</option>
    												<optgroup label="湯品">
    												    <option>紫菜湯 15元</option>
    												    <option>魚丸湯 20元</option>
    												    <option>貢丸湯 20元</option>
    												    <option>蛤蜊湯 30元</option>
    												<optgroup label="其他">
    												    <option>手工水餃（10粒） 40元</option>    												    
                                                        <option>韓式泡菜水餃（10粒） 65元</option>
														<option>燙青菜 30元</option>
												</select>
                                            	<?php echo ("<select name=\"".$day."[]\" id=\"$day-8\" style=\"display:none\" onChange=\"display('$day-9')\">"); ?>
													<option value="">餐點８</option>
                                                    <optgroup label="飯類">
   														<option>肉燥飯 35元</option>
   														<option>雞肉飯 45元</option>
   														<option>柴魚飯 45元</option>
   														<option>爌肉飯 50元</option>
   														<option>咖哩飯 60元</option>
   														<option>香腸炒飯 50元</option>
   														<option>火腿炒飯 50元</option>
   														<option>排骨燴飯 60元</option>
                                                        <option>蔥爆豬柳飯 60元</option>
                                                        <option>蔥爆雞柳飯 60元</option>
                                                    <optgroup label="麵類">
    													<option>麻醬麵 45元</option>
    												    <option>陽春麵 35元</option>
    												    <option>排骨麵 60元</option>
    												    <option>泡菜辣麵 60元</option>
    												    <option>義大利麵（白醬） 70元</option>
    												    <option>義大利麵（青醬） 70元</option>
    												    <option>榨菜肉絲麵 50元</option>
    												    <option>鍋燒意麵 60元</option>
    												    <option>鍋燒泡麵 60元</option>
    												    <option>鍋燒冬粉 60元</option>
    												    <option>鍋燒烏龍 60元</option>
    												    <option>鍋燒雞絲 60元</option>
    												<optgroup label="粥類">
    												    <option>皮蛋瘦肉粥 60元</option>
    												<optgroup label="飲料">
    												    <option>紅茶（大） 20元</option>
    												    <option>冬瓜茶（大） 20元</option>
    												    <option>鮮奶茶（大） 30元</option>
    												<optgroup label="湯品">
    												    <option>紫菜湯 15元</option>
    												    <option>魚丸湯 20元</option>
    												    <option>貢丸湯 20元</option>
    												    <option>蛤蜊湯 30元</option>
    												<optgroup label="其他">
    												    <option>手工水餃（10粒） 40元</option>    												    
                                                        <option>韓式泡菜水餃（10粒） 65元</option>
														<option>燙青菜 30元</option>
												</select>
                                            	<?php echo ("<select name=\"".$day."[]\" id=\"$day-9\" style=\"display:none\" onChange=\"display('$day-10')\">"); ?>
													<option value="">餐點９</option>
                                                    <optgroup label="飯類">
   														<option>肉燥飯 35元</option>
   														<option>雞肉飯 45元</option>
   														<option>柴魚飯 45元</option>
   														<option>爌肉飯 50元</option>
   														<option>咖哩飯 60元</option>
   														<option>香腸炒飯 50元</option>
   														<option>火腿炒飯 50元</option>
   														<option>排骨燴飯 60元</option>
                                                        <option>蔥爆豬柳飯 60元</option>
                                                        <option>蔥爆雞柳飯 60元</option>
                                                    <optgroup label="麵類">
    													<option>麻醬麵 45元</option>
    												    <option>陽春麵 35元</option>
    												    <option>排骨麵 60元</option>
    												    <option>泡菜辣麵 60元</option>
    												    <option>義大利麵（白醬） 70元</option>
    												    <option>義大利麵（青醬） 70元</option>
    												    <option>榨菜肉絲麵 50元</option>
    												    <option>鍋燒意麵 60元</option>
    												    <option>鍋燒泡麵 60元</option>
    												    <option>鍋燒冬粉 60元</option>
    												    <option>鍋燒烏龍 60元</option>
    												    <option>鍋燒雞絲 60元</option>
    												<optgroup label="粥類">
    												    <option>皮蛋瘦肉粥 60元</option>
    												<optgroup label="飲料">
    												    <option>紅茶（大） 20元</option>
    												    <option>冬瓜茶（大） 20元</option>
    												    <option>鮮奶茶（大） 30元</option>
    												<optgroup label="湯品">
    												    <option>紫菜湯 15元</option>
    												    <option>魚丸湯 20元</option>
    												    <option>貢丸湯 20元</option>
    												    <option>蛤蜊湯 30元</option>
    												<optgroup label="其他">
    												    <option>手工水餃（10粒） 40元</option>    												    
                                                        <option>韓式泡菜水餃（10粒） 65元</option>
														<option>燙青菜 30元</option>
												</select>
                                            	<?php echo ("<select name=\"".$day."[]\" id=\"$day-2\" style=\"display:none\">"); ?>
													<option value="">餐點１０</option>
                                                    <optgroup label="飯類">
   														<option>肉燥飯 35元</option>
   														<option>雞肉飯 45元</option>
   														<option>柴魚飯 45元</option>
   														<option>爌肉飯 50元</option>
   														<option>咖哩飯 60元</option>
   														<option>香腸炒飯 50元</option>
   														<option>火腿炒飯 50元</option>
   														<option>排骨燴飯 60元</option>
                                                        <option>蔥爆豬柳飯 60元</option>
                                                        <option>蔥爆雞柳飯 60元</option>
                                                    <optgroup label="麵類">
    													<option>麻醬麵 45元</option>
    												    <option>陽春麵 35元</option>
    												    <option>排骨麵 60元</option>
    												    <option>泡菜辣麵 60元</option>
    												    <option>義大利麵（白醬） 70元</option>
    												    <option>義大利麵（青醬） 70元</option>
    												    <option>榨菜肉絲麵 50元</option>
    												    <option>鍋燒意麵 60元</option>
    												    <option>鍋燒泡麵 60元</option>
    												    <option>鍋燒冬粉 60元</option>
    												    <option>鍋燒烏龍 60元</option>
    												    <option>鍋燒雞絲 60元</option>
    												<optgroup label="粥類">
    												    <option>皮蛋瘦肉粥 60元</option>
    												<optgroup label="飲料">
    												    <option>紅茶（大） 20元</option>
    												    <option>冬瓜茶（大） 20元</option>
    												    <option>鮮奶茶（大） 30元</option>
    												<optgroup label="湯品">
    												    <option>紫菜湯 15元</option>
    												    <option>魚丸湯 20元</option>
    												    <option>貢丸湯 20元</option>
    												    <option>蛤蜊湯 30元</option>
    												<optgroup label="其他">
    												    <option>手工水餃（10粒） 40元</option>    												    
                                                        <option>韓式泡菜水餃（10粒） 65元</option>
														<option>燙青菜 30元</option>
                        				  		</select>
                                                <input type="submit" class="button special fit" value="送出"></input>
											</form>    
                                        </p>
