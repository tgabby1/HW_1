var commentApp = new Vue({
  el: '#commentMain',
  data: {
    comment: {
      id: 0,
      comment: ''
    },
    commentForm: { },   // populated by this.getEmptyWorkForm()
    commentList: [{
      id: 0,
      comment: ''
    }]
  },
  methods: {
    handleCommentForm(e) {

      // TODO: Check validity

      //TODO: clone commentForm
      const s = document.getElementById('comment').value;

      console.log(s);
      //TODO: POST to remote server
      // fetch(url,)
      // .then()

      //TODO: Append result
      //this.work.push(JSON.parse(s));

      // Reset workForm
      this.workForm = this.getEmptyCommentForm();
    },
    getEmptyCommentForm() {
      return {
        id: 0,
        comment: '',
      }
    },
  },
  created () {

    // Do data fetch
    const url = new URL(window.location.href);

    // Populate workForm with default values
    this.commentForm = this.getEmptyCommentForm();

    // TODO: Fetch task-specific data
    // fetch('api/task?id=4')
    fetch('api/comment.php?')
    .then( response => response.json() )
    .then( json => {commentApp.commentList = json} )
    .catch( err => {
      console.log('COMMENT FETCH ERROR:');
      console.log(err);
    })
  }
})
