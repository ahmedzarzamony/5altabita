//ngIf
<div *ngIf="courses.length then Courses else noCourses"></div>

<ng-template #Courses>
    List of Courses
</ng-template>

<ng-template #noCourses>
    No Courses
</ng-template>

//Or using hidden attr
<div [hidden]="condition">
        pla pla
</div>

// the  diffrent betwwen  ngif and hidden, hidden letthe code on the browser but only hidden while  ngif remove it from the dom
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
