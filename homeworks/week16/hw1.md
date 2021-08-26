*在 JavaScript 裡面，一個很重要的概念就是 Event Loop，是 JavaScript 底層在執行程式碼時的運作方式。請你說明以下程式碼會輸出什麼，以及盡可能詳細地解釋原因。

 console.log(1)

 setTimeout(() => {
   console.log(2)
 }, 0)

 console.log(3)

 setTimeout(() => {
   console.log(4)
 }, 0)

 console.log(5)

在這個程式碼中輸出了 1 3 5 2 4。

在這一個執行過程中，總共出現了這四個角色，事件循環 (Event Loop)、事件佇列 (task Queue)、事件堆疊 (Call Stack) 與 webapis。
首先在js中 setTimeout並不存在，這是瀏覽器賦予的功能，所以在執行這段程式碼的時候會有一個先後順序:

0.main()先放入stack 裡面

1.console.log(1) 放入 stack (stack: main()/console.log(1) )
2.執行console.log(1)，印出1，並從stack中移除
3.setTimeout(cd)跑去stack ，之後被踢到webapis去執行，執行時間零秒後，於是又被踢到queue痴痴等，需要等到stack 中的事件被清空後才輪的到它
4.console.log(3) 放入 stack (stack: main()/console.log(3) )
5.執行console.log(1)，印出1，並從stack中移除
6.遇到setTimeout，依舊被踢到webapis後(0秒)跑到queue乖乖排隊
7.console.log(5)放入stack後執行、印出5，被移除
8.移除amin()，這時stack 空了嗎? 空惹!! queue裡面的setTimeout終於可以跑到stack中並執行裡面的程式碼印出2
9.2印出來的嗎?印出來啦! stack也空惹，第二個setTimeout跑到stack 中執行 並印出4! 



 
 

