<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Structures Project</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="fonts/font-awesome.css" />
        <script src="js/jquery.nicescroll.min.js"></script>
    </head>
    <body style="background: url('img/BG.jpg')">
        <header class="header navbar-inverse" style="color:#fff">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <a href="index.php" class="logo"><b>Data Structures & Algorithms</b></a>
        </header>
        <aside>
            <div class="nav-collapse" id="sidebar">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="#home" data-toggle="tab">Home</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#">Basic data structures</a>
                        <ul class="sub">
                            <li>
                                <a href="#arrays" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Arrays</a>
                            </li>
                            <li>
                                <a href="#queues" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Queues</a>
                            </li>
                            <li>
                                <a href="#stacks" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Stacks</a>
                            </li>
                            <li>
                                <a href="#lists" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Lists</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="tab">Elementary Data Structures</a>
                        <ul class="sub">
                            <li>
                                <a href="#linkedLists" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Linked Lists</a>
                            </li>
                            <li>
                                <a href="#priorityQueues" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Priority Queues</a>
                            </li>
                            <li>
                                <a href="#heaps" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Heaps</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  data-toggle="tab" href="#" data-toggle="tab">Trees</a>
                        <ul class="sub">
                            <li>
                                <a href="#binaryTree" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Binary Tree Application</a>
                            </li>
                            <li>
                                <a href="#treeTraversal" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Tree Traversals</a>
                            </li>
                            <li>
                                <a href="#binarySearchTree" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Binary Search Trees</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#sorting">Sorting</a>
                        <ul class="sub">
                            <li>
                                <a href="#bubbleSort" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Bubble Sort</a>
                            </li>
                            <li>
                                <a href="#insertionSort" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Insertion Sort</a>
                            </li>
                            <li>
                                <a href="#selectionSort" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Selection Sort</a>
                            </li>
                            <li>
                                <a href="#mergeSort" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Merge Sort</a>
                            </li>
                            <li>
                                <a href="#quickSort" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Quick Sort</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  data-toggle="tab" href="#searching">Searching</a>
                        <ul class="sub">
                            <li>
                                <a href="#linear" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Linear Search</a>
                            </li>
                            <li>
                                <a href="#binary" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Binary Search</a>
                            </li>
                        </ul>
                    <li>
                        <a  data-toggle="tab" href="#basicGraphs" data-toggle="tab">Basic Graphs</a>
                        <ul class="sub">
                            <li>
                                <a href="#topologicalSort" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Topological Sort</a>
                            </li>
                            <li>
                                <a href="#minimumSpaningTrees" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Minimum Spanning Trees</a>
                            </li>
                            <li>
                                <a href="#shortestPaths" data-toggle="tab">
                                    <i class="fa fa-chevron-circle-right"></i>Shortest Paths</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <!--main content-->
        <section id="main-content">
            <section class="wrapper">
                <!--content here-->
                <div class="tab-content">
                    <?php include 'pages/tabpanes.php'; ?>
                </div>
            </section>
        </section>
        <!--<///main content-->
        <!--footer-->
        <div class="site-footer nav navbar-inverse">
            <div class="footer text-center">
                <div>&copy; Copyright 2016</div>            
                <span class="h4">Members Involved</span>
                <ol class="list-inline text-capitalize">
                    <li><a class="fa fa-user"> Lyada Felix </a></li>
                    <li><a class="fa fa-user"> Masete Nicholas </a></li>
                    <li><a class="fa fa-user"> Kisya Moses </a></li>
                    <li><a class="fa fa-user"> Nabigwaku Edward </a></li>
                </ol>
            </div>
        </div>
        <script>
            $(".dropdown-toggle").dropdown();
            $("a[href='#home']").tab('show');
        </script>
    </body>
</html>