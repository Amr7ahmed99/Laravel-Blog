 function destroyPost(ev, id){
    console.log(ev.target, id)
    if(ev.target.innerText === "Delete"){
        const confirmDelete=  confirm("Are you sure you want to delete this post?");
        if(confirmDelete){
            const httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = ({target})=>{
                if(target.status === 200 && target.readyState === 4){
                    console.log("first")
                    window.location.reload(true);
                }
            };
            httpRequest.open("GET", `/posts/${id}/delete`);
            httpRequest.send();
        }
    }
}
