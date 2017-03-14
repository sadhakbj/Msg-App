@extends('layouts.app')

@section('content')
  <div id="app">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">List of all the pages you manage.</div>

            <div class="panel-body">
              @{{ message }}
              <button @click="updateMe">Update me</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


<script src="https://unpkg.com/vue@2.2.2"></script>
<script type="text/javascript">
  window.onload = function() {

    var vue = new Vue({
      el: '#app',
      data: {
        message: 'Welcome To the application from vue.',
        showMe: false,
      },
      methods: {
        updateMe() {
          alert('hello world');
        },
        listAllThePages() {
          $.ajax({

          });
        }
      },
      mounted() {
        let self = this;
        self.listAllThePages();
      }
    });
  };
</script>
