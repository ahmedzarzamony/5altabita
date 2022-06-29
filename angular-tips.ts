//ngIf
<div *ngIf="courses.length then Courses else noCourses"></div>

<ng-template #Courses>
    List of Courses
</ng-template>

<ng-template #noCourses>
    No Courses
</ng-template>

========================================================
//ngContent
<div class="panel panel-default">
    <div class="panel-heading">
        <ng-content select=".heading"></ng-content>
    </div>
    <div class="panel-body">
        <ng-content select="#body"></ng-content>
    </div>
</div>

========================================================
