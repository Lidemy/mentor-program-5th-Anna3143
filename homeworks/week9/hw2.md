## 資料庫欄位型態 VARCHAR 跟 TEXT 的差別是什麼

 1.varchar可變長度，可以設置最大長度；適合用在長度可變的屬性。

 2.text不設置長度， 當不知道屬性的最大長度時，適合用text。

  以速度來說的話varchar > text


## Cookie 是什麼？在 HTTP 這一層要怎麼設定 Cookie，瀏覽器又是怎麼把 Cookie 帶去 Server 的？

1.Cookie是一種讓網路瀏覽更流暢方便的機制。使用Cookie能夠免去輸入登入資訊的麻煩，也更容易搜尋到自己需要的資訊。
方便某些網站為了辨識使用著資料。

2.為了讓 server 端能記住 client 的狀態，HTTP 利用 Cookie 和 Set-Cookie 這兩個 header 提供 cookies 的功能，Client 
發送帶有其資料的 request，隨後 server 會使用 Set-Cookie header 告訴 browser這些資料要存在 Cookies 資料庫，
當 Chrome 收到帶有 Set-Cookie 的 response 時，會將 Set-Cookie 的 value 存入 Cookies 資料庫。


3.Server 可以在 HTTP response 中回傳 Set-Cookie header 來告訴瀏覽器要設定 cookie。瀏覽器看到 Set-Cookie header 
便會將 cookie 儲存起來，之後對同一個 domain 發送 HTTP request 的時候，瀏覽器就會將 cookie 帶在 HTTP request 
Cookie header 裡。


## 我們本週實作的會員系統，你能夠想到什麼潛在的問題嗎？

因為這一周做的會員系統只有基礎的登入，留言與評論功能而已。所以如果有人再評論區或登入區輸入惡意的js指令的話，
會有很嚴重的隱私外洩，或竄改資料問題。另外因為註冊程序簡單，所以一個人可以無限的註冊會員，這也會造成管理上的困擾。
總而言之還存在著許多安全漏洞，但之後的幾周因該可以將問題慢慢修正回來。




