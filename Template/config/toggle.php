<div class="panel">
    <?= $this->form->radio('hide_swimlane_tcounts', 'Hide Total Swimlane Task Counts in column headers' , 1, isset($values['hide_swimlane_tcounts'])&& $values['hide_swimlane_tcounts']==1) ?>
    <?= $this->form->radio('hide_swimlane_tcounts', 'Show Total Swimlane Task Counts in column headers' , 2, isset($values['hide_swimlane_tcounts'])&& $values['hide_swimlane_tcounts']==2) ?>
</div>
