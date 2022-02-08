
function GetBlogPost(){
var post = JSON.parse(localStorage.getItem('post'))
// post.push(['external testing','external details'])
alert(post)
}
GetBlogPost()