<div>
    <!-- Sidebar  -->
    <nav id="sidebar">

    <ul class="list-unstyled text-white font-16">
        <li class="pt-3 text-white">
            <a class="text-white pl-4" href="/home">Home</a>
        </li>
        <li class="pt-3 text-white">
            <a class="text-white pl-4" href="/students">Students</a>
        </li>
        <li class="pt-3 text-white">
            <a class="text-white pl-4" href="/students/add">Add Student</a>
        </li>
        <li class="pt-3 text-white">
            <a class="text-white pl-4" href="/projects/add">Add Project</a>
        </li>
        <li>
        <a class="text-white pl-4" href="/plagiarism">Plagiarism Detection Tool</a>
        </li>
        <li>
        <a class="text-white pl-4" href="/chatify">Chat</a>
        </li>
        <li>
        <a class="text-white pl-4">
            <form action="/logout" method="post">
                @csrf
                <button class="btn btn-light bg-block text-dark pl-4" type="submit">Log Out</button>
            </form>
        </a>
        <!-- <a class="text-white pl-4" href="/logout">Log Out</a> -->
        </li>
    </ul>
        <!-- <form action="/logout" method="post">
            @csrf
            <button class="btn btn-light text-dark pl-4" type="submit">Log Out</button>
        </form> -->
    </nav>
    <!-- sidebar end -->
</div>