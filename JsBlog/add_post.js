

function AddBlog(){
let post = []
document.getElementById('blog_submit').addEventListener('click',(e)=>{
e.preventDefault();
var blog_title = document.getElementById('blog_title').value
var blog_details = document.getElementById('blog_details').value
post.push(blog_titleblog_details)
// post.push()
localStorage.setItem('post',JSON.stringify(post))
})

}
AddBlog()
