<div class="form-group">
    {{ html()->label('name')->for('name') }}
    {{ html()->text('name')->class('form-control') }}
    </div>
    
    <div class="form-group">
        {{ html()->label('Category')->for('category_id') }}
        {{ html()->select('category_id', $categories)->class('form-select') }}
    </div>
    
    <div class="form-group">
    {{ html()->label('Slug')->for('slug') }}
    {{ html()->text('slug')->class('form-control') }}
    </div>
    
    <div class="form-group">
    {{ html()->label('Description')->for('description') }}
    {{ html()->text('description')->class('form-control') }}    
    </div>
    
    <div class="form-group">
    {{ html()->label('Status')->for('status') }}
    {{ html()->select('status', ['1' => 'Active', '0' => 'Deactive'])->class('form-select') }}
    </div>