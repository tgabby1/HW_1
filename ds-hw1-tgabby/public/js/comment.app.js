var commentApp = new Vue({
  el: '#commentMain',
  data: {
    comment: {
      id: 0,
      comment: ''
    },
    commentForm: { },   // populated by this.getEmptyWorkForm()
  },
  methods: {
    handleCommentForm(e) {
      e.preventDefault();

      // TODO: Check validity

      console.log(e);

      //TODO: clone commentForm
      const s = JSON.stringify(this.commentForm);
      //TODO: POST to remote server
      // fetch(url,)
      // .then()

      //TODO: Append result
      this.work.push(JSON.parse(s));

      // Reset workForm
      this.workForm = this.getEmptyCommentForm();
    },
    getEmptyCommentForm() {
      return {
        id: '',
        comment: '',
      }
    },
  },
  created () {
    // Populate workForm with default values
    this.commentForm = this.getEmptyCommentForm();

    // Do data fetch
    const url = new URL(window.location.href);
    const commentId = url.searchParams.get('id');
    console.log('Comment Id: '+ id);

    if (!id) {
      //TODO: Error? 404?
      //e.g., window.location = '404.html';
    }

    // TODO: Fetch task-specific data
    // fetch('api/task?id=4')
    fetch('api/comment.php?id='+id)
    .then( response => response.json() )
    .then( json => {commentApp.comment = json} )
    .catch( err => {
      console.log('COMMENT FETCH ERROR:');
      console.log(err);
    })
  }
})
