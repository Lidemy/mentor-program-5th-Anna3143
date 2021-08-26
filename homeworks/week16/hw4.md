const obj = {
  value: 1,
  hello: function() {
    console.log(this.value)
  },
  inner: {
    value: 2,
    hello: function() {
      console.log(this.value)
    }
  }
}
  
const obj2 = obj.inner
const hello = obj.inner.hello
obj.inner.hello() // ??
obj2.hello() // ??
hello() // ??

2
2
undefined

1. 首先我們進到obj.inner()的世界，順藤摸瓜的進到obj 中的inner 。這時因為下面的涵式呼叫了hello，我們繼續摸進了hello裡面，執行console.log(this.value)
，這時找到了inner這個物件的value，所以印出了2
2. 在這面obj2被宣告是obj.inner，所以在這邊的步驟跟上一個一樣，照的同樣的路徑摸下去，執行console.log(this.value)印出2。
3.在這邊並沒有使用嚴格模式，所以會以一般模式作解釋。執行hello()，因為已經定義了hello = obj.inner.hello，這邊的hello會直接執行console.log(this.value)
印出this value的值，但這裡的this已經是最上層了，所以在瀏覽器的定義下value 為 undefined。