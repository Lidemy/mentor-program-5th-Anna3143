
for(var i=0; i<5; i++) {
  console.log('i: ' + i)
  setTimeout(() => {
    console.log(i)
  }, i * 1000)
}

這邊我看網路上的解釋寫得很專業詳細，但我的智商不太給力，以我的理解背後的原理應該是:

0.main()被放入stack 中
1.首先i = 0，跑到下層 console.log('i: ' + i)，在這邊存進stack中，執行印出 i: 0 並移除
2.setTimeout(cd) 進入 webapi 環境中 ，一秒後進入queue
3.loop 持續執行，i=0 理所當然 <5，+1 變成了1 ，進入下一步 
4.i = 0，跑到下層 console.log('i: ' + i)，在這邊存進stask中、執行印出 i: 1 並移除
5.setTimeout(cd) 進入 webapi 環境中 ，一秒後進入queue(第二個setTimeout(cd)

如此再重複了幾次後 i=4了 ，此時webapi中已經累積了5個setTimeout了(i=0~4累積出來的)，並依序執行延遲一秒的命令
(console.log('i: ' + i)的動作在node執行的得很快，相比之下第一個setTimeout的延遲一秒的動作還沒完成所以尚未進入到queue中，
其餘四個也在排隊依序執行)

第n步: 此時的 i=4, 加 1 後 i = 5，但 5不小於5 ，迴圈停止，stack已被清空，開始輪到queue中的物件被執行
 

第一個setTimeout 已完成延遲一秒的任務，過了queue後，回到stack執行 console.log(i)的動作，而這時的i已經不是當初河岸邊單純的i了，它，
是5!!!! 

於是5被印出了，stack清空，其他的setTimeout也像下餃子一樣，一個個依序延遲一秒後經過queue，回到stack印出已經不復當初的i，於是剩下4個5也
格個一秒的間隔依序node出來
此時我們得到了:
i: 0
i: 1
i: 2
i: 3
i: 4
5
5
5
5
5


 
