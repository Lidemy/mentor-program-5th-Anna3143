請說明以下程式碼會輸出什麼，以及盡可能詳細地解釋原因。

var a = 1
function fn(){
  console.log(a)
  var a = 5
  console.log(a)
  a++
  var a
  fn2()
  console.log(a)
  function fn2(){
    console.log(a)
    a = 20
    b = 100
  }
}
fn()
console.log(a)
a = 10
console.log(a)
console.log(b)

result:
undefined
5
6
20
1
10
100

1.開始程式啦，先進入globaEC，生出VO並初始化變數(有var a = 1,function fn) ，在fn中 var a 上升到最上層，console.log(a) 印出undedined
2.在這裡var a 被附值 5，接著進入function fn2() 產生A0並初始化，因為沒資料要編譯，編譯階段結束，先進入執行階段，在這個階段 console.log(a) 印出 5
3.a++ ,這時a=6，console.log(a) 印出6，接著進入fn2()碰到 a = 20，這時的AO中a = 20 ，執行並印出20
4.fn() 結束 ， 又碰到一個console.log(a)，這時前面已宣告變數為a=1 ，遂印出1
5. 又宣告a = 10，把先前的a值覆蓋，此時a = 10
6.console.log(a) 印出a = 10
7.執行console.log(b)，跑道上層向下找起，照到VO 中的 b 為 100，所以印出100

