<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Structures Project</title>
        <link rel="stylesheet" href="bootstrap.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="fonts/font-awesome.css" />
    </head>
    <body>
        <!-- nav> -->
        <div class="navbar navbar-inverse navbar-static-top navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">

                </div>
                <ul class="nav navbar-nav navbar-top-links">
                    <li><a href="index.php" class="fa fa-home">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-th"></i> Basic Data Structures </a>
                        <ul class="dropdown-menu" style="font-size:13px; width: 10em">
                            <li><a href="array">Arrays</a></li><li><a href="queues">Queues</a></li>
                            <li><a href="stacks">Stacks</a></li><li><a href="lists">Lists</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-th"></i> Elementary Data Structures </a>
                        <ul class="dropdown-menu" style="font-size:13px; width: 10em">
                            <li><a href="#">Linked Lists</a></li><li><a href="#">Priority Queues</a></li>
                            <li><a href="#">Heaps</a></li>
                        </ul></li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-th"></i> Trees </a>
                        <ul class="dropdown-menu" style="font-size:13px; width: 10em">
                            <li><a href="bta">Binary Tree Application</a></li><li><a href="#">Tree Traversals</a></li>
                            <li><a href="#">Binary Search Trees</a></li>
                        </ul></li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-th"></i> Sorting </a>
                        <ul class="dropdown-menu" style="font-size:13px; width: 10em">
                            <li><a href="bs">Bubble Sort</a></li><li><a href="is">Insertion Sort</a></li>
                            <li><a href="#">Selection Sort</a></li>
                            <li><a href="#">Merge Sort</a></li>
                            <li><a href="#">Quick Sort</a></li>
                        </ul></li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-th"></i> Searching </a>
                        <ul class="dropdown-menu" style="font-size:13px; width: 10em">
                            <li><a href="#">Linear Search</a></li><li><a href="#">Binary Search</a></li>
                        </ul></li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-th"></i> Basic Graphs </a>
                        <ul class="dropdown-menu" style="font-size:13px; width: 14em">
                            <li><a href="#">Topological Sort</a></li><li><a href="#">Minimum Spanning Trees</a></li>
                            <li><a href="#">Shortest Paths</a></li>
                        </ul></li>	
                    <li><a href="blog.php"> Blog </a></li>
                </ul>
            </div>
        </div>
        <!-- /nav -->
        <!-- Content -->
        <div class="container" style="background-color: white;">		
            <div class="row">
                <!-- Main Text -->
                <div class="col-md-12">
                    <div>
                        <h1 class="text-center">WELCOME TO DATA STRUCTURES AND ALGORITHMS</h1></br>
                        <h2>Description</h2>
                        <ul>
                            <li>The course gives students a firm foundation of data structures and algorithms.</li>
                            <li>The course trains students on systematic development and analysis of algorithms.</li>					
                            <li>The importance of algorithm complexity on computer performance is emphasized.</li>
                            <li>Typical computational problems and their solutions/analysis are to be covered.</li>
                        </ul>
                        <h2>Aims</h2>
                        <h3>The aims of the course are to:</h3>
                        <ul>
                            <li>Make students appreciate the role of data structures and algorithms in computer programs;</li>
                            <li>Improve student's problem solving skills by subjecting them to step by step analysis and design of computer algorithms;</li>
                            <li>Introduce students to concepts Data structures;</li>
                            <li>Introduce students to concepts of algorithm analysis;</li>
                            <li>To expose students generic algorithmic problems and apply them to other computational scenarios.</li>
                        </ul>
                        <h2>Teaching and Learning pattern</h2>
                        <ul>
                            <li>The teaching pattern is by lecture, practical lab work, group discussion and class presentations.</li>
                        </ul>
                        <h2>Indicative content</h2>
                        <table border="1">
                            <tr><td>WEEK</td>
                                <td>HOURS</td>
                                <td>CONTENT</td>
                                <td>INTENDED LEARNING OUTCOMES</td></tr>
                            <tr><td>Week 1 & 2</td>
                                <td>8hrs</td>
                                <td>Complexity analysis (Big-O notation, orders of growth, worst case, average case);</td>
                                <td><ul>
                                        <li>Be able to understand and appreciate the role of data organization and algorithmic structure.</li>
                                        <li>Be able to compare the efficiency of a good programming algorithm.</li>
                                        <li>Argue the correctness of algorithms using inductive proofs and loop invariants</li>
                                        <li>Analyze worst-case running times of algorithms using asymptotic analysis</li>
                                        <li>Describe the relative merits of worst-, average-, and best-case </li>
                                        <li>Prove the correctness and analyse the running time of the basic algorithms for those classic problems in various domains</li>
                                    </ul></td></tr>
                            <tr><td>Week 3 </td>
                                <td>4hrs</td>
                                <td>Recursive data structures: Merge, Quick sort</td>
                                <td><ul>
                                        <li>Understand the mechanics of recursion.</li>
                                        <li>To implement recursive formulation of a problem structures.</li>
                                        <li>Understand how recursion is implemented by a computer system.</li>
                                        <li>Analysis of recursion.</li>	
                                    </ul></td></tr>
                            <tr><td>Week 4</td>
                                <td>4hrs</td>
                                <td>Elementary Data Structures: Lists, Stack and Queues, Priority Queues</td>
                                <td><ul>
                                        <li>Explain the concept of abstract data types (ADT)</li>
                                        <li>Understand the abstract data types; lists, stacks and queues</li>
                                        <li>Analyze the performance of the implementation of the linear basic data structures. </li>
                                        <li>Assess how the choice of data structures and algorithm design methods impacts the performance of programs.</li>
                                        <li>Develop algorithms for manipulating stacks, queues, linked lists, trees, graphs</li>
                                        <li>Analyze, implement, and use linked list, double-linked list, circular-linked list, and recursion on linked list</li>
                                    </ul></td></tr>
                            <tr><td>Week 5</td>
                                <td>4hrs</td>
                                <td>Sorting Algorithms: Bubble, Insertion selection, merge, and quick sort.</td>
                                <td><ul>
                                        <li>Explain the major algorithms for sorting.</li>
                                        <li>Recite the analyses of these algorithms and the design strategies that the algorithms embody.</li>
                                        <li>Synthesize algorithms that employ sorting as a sub procedure. </li>
                                        <li>Derive lower bounds on the running time of comparison-sorting algorithms, and explain how these bounds can be overcome.</li>
                                    </ul></td></tr>
                            <tr><td>Week 6</td>
                                <td>4hrs</td>
                                <td>Searching Algorithms:Linear Search, Binary Search</td>
                                <td><ul>
                                        <li>Explain and implement sequential search and binary search.</li>
                                        <li>Be able to analyse the performance of these searching algorithms.</li>
                                    </ul></td></tr>
                            <tr><td>Week 7& 8</td>
                                <td>8hrs</td>
                                <td>Trees and Tree algorithms:Binary tree applications, Tree Traversals, Binary search Trees</td>
                                <td><ul>
                                        <li>Understand what a tree data structure is and how they are used.</li>
                                        <li>Implementation of trees using a list.</li>
                                        <li>Implementation of trees as a recursive data structure.</li>
                                        <li>Develop algorithms for manipulating, trees.</li>
                                    </ul></td></tr>
                            <tr><td>Week9&10</td>
                                <td>8hrs</td>
                                <td>Graph and Graph Algorithms: Topological sort, Minimum spanning trees,Shortest path</td>
                                <td><ul>
                                        <li>Explain the major graph algorithms and their analyses. </li>
                                        <li>Employ graphs to model engineering problems, when appropriate.</li>
                                        <li>Synthesize new graph algorithms and algorithms that employ graph computations as key components, and analyze them</li>
                                    </ul></td></tr>
                            <tr><td>Week1-13</td>
                                <td></td>
                                <td>Project :Course projects aimed at problem solving, design, and implementation</td>
                                <td><ul>
                                        <li>Demonstrate a familiarity with applied algorithmic settings in real problem-solving </li>
                                        <li>Evaluation of Correctness, Design and Implementation, and Documentation of algorithms.</li>
                                    </ul></td></tr>
                            <tr><td>Week 14-17</td>
                                <td></td>
                                <td>Examinations</td>
                                <td></td>
                            </tr>
                        </table>

                        <h2>Assessment method</h2>
                        <ul>
                            <li>The assessment will be done by tests/assignment (40%) and final examination (60%)</li>
                        </ul>
                        <h2>Reading List</h2>
                        <ol>
                            <li>Data Structures and Algorithms in Java by Michael T. Goodric SIXTH Edition 2014</li>
                            <li>Data Structures and Algorithm Analysis in Java  by Mark Allen Weiss  Third Edition 2012</li>
                            <li>Problem Solving with Algorithms and Data Structures Release 3.0 by Brad Miller, David Ranum 2013</li>
                        </ol>

                        <!-- End Main Text -->
                    </div>
                </div>		
            </div>
        </div>
        <div class="footer">
            <div class="row padding-vert-40">
                <hr class="margin-top-20">
                <div class="footer text-center">
                    <div>&copy; Copyright 2016</div>            
                    <span class="h4">Members Involved</span>
                    <ul class="list-inline text-capitalize">
                        <li><a class="fa fa-user"> Lyada Felix </a></li>
                        <li><a class="fa fa-user"> Masete Nicholas </a></li>
                        <li><a class="fa fa-user"> Kisya Moses </a></li>
                        <li><a class="fa fa-user"> Nabigwaku Edward </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <script>

            $(".dropdown-toggle").dropdown();
        </script>
    </body>
</html>