<?php
/*
Template Name: Test template two
*/

get_header(); ?>

<style type="text/css">
    #todoapp ul {
      list-style-type: none; /* Hides bullet points from todo list */
    }
    #todo-list input.edit {
      display: none; /* Hides input box*/
    }
    #todo-list .editing label {
      display: none; /* Hides label text when .editing*/
    }    
    #todo-list .editing input.edit {
      display: inline; /* Shows input text box when .editing*/
    }    
  </style>  

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <section id="todoapp">
        <header id="header">
          <h1>Todos</h1>
          <input id="new-todo" placeholder="What needs to be done?">
          <div>
            <a href="#/">show all</a> |
            <a href="#/pending">show pending</a> |
            <a href="#/completed">show completed</a>
          </div>
        </header>
        <section id="main">
          <ul id="todo-list"></ul>
        </section>
      </section>
      
      <script type="text/template" id="item-template">
      <div class="view">
        <input class="toggle" type="checkbox">
        <label><%- title %></label>
        <input class="edit" value="<%- title %>">
        <button class="destroy">remove</button>
      </div>
    </script>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
