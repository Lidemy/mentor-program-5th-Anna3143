## 請找出三個課程裡面沒提到的 HTML 標籤並一一說明作用。

<table>:指表格的開始
<th>:列裡面的標題
<td>:列裡面的結束

## 請問什麼是盒模型（box modal）

在HTML裡面的原色可以看做一個個獨立的"盒子"，裡面包含了許多元素，
有content,padding,border 與 margin。透過一個個盒子間的排列，設計來
達到我們想要的網頁編排效果。


## 請問 display: inline, block 跟 inline-block 的差別是什麼？

*inline為行內元素，元素在同一行呈現，不論是文字或圖片都不會換行，也不會影響其他的版面配置。
裡面元素的寬度決定了行的寬度。
*block為區塊元素，寬度會占滿一整個螢幕寬度，可以設定長寬高，但依舊不會與其他元素並排。
*inline-block:同時擁有inline與block的屬性，可以設定元素的長寬高，亦可以水平並排，不會占去一
整個屏幕寬度。


## 請問 position: static, relative, absolute 跟 fixed 的差別是什麼？

當我們在對元素做特別的位置移動時，我們就需要使用到position，其有四種屬性值，分別是: static,relative,absolute 與fixed。
position: static 為預設狀況，一班我們在設定<a><div><p>時都屬於這個範疇。會按照normalflow的方式去定位布局。
position: relative 會依照原本的normal flow的位置去做一棟，且不影響其他的元素,再某些情況下會產生重疊行為。
position: absolute 可以脫離原來預設的版面，以基準元素為起點自由改變位置，其嘎元素會自動遞補上去。
position: fixed 跟absolute有點像。都是以絕對位置被至元素。但fixed為以整個視窗(body)為基準，就算拉動視窗也不會發生改變。