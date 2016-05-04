@extends('layouts.app')

@section('content')

    @include('common.errors')
   <!-- Bootstrap Boilerplate... -->
   <div class="pure-g">
        <!-- Display Validation Errors -->
         <div class="pure-u-1-1">
            <!-- New Task Form -->
            <form action="{{ url('task') }}" method="POST" class="pure-form pure-form-stacked">
                {!! csrf_field() !!}

                <!-- Task Name -->
                <div class="form-group">
                    <label for="task-name" class="col-sm-3 control-label">Task</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control">
                    </div>

                     <label for="task-description" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-6">
                        <textarea type="text" name="description" id="task-description" class="form-control">
                        </textarea>
                    </div>
                </div>

                <!-- Add Task Button -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="pure-button pure-button-primary">
                            <i class="fa fa-plus"></i> Add Task
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <hr/>
        <div class="pure-u-1-1">
            @if (count($tasks) > 0)
                <div class="">
                    Current Tasks
                </div>

                <div class="panel-body">
                    <table class="pure-table task-table">
                        <!-- Table Headings -->
                        <thead>
                            <th>Task</th>
                            <th>&nbsp;</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>

                                    <td>
                                        <form action="{{ url('task/'.$task->id) }}" method="POST">
                                            {!! csrf_field() !!}
                                            {!! method_field('DELETE') !!}

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
