<x-admin.admin-header />
    <x-admin.admin-sidebar />
    <section id="forApprovalSection">
        <div class="forApprovalInput">
            <div class="forApprovalInputHolder">
                <input type="text" name="" id="" placeholder="Search Plate / CS">
            </div>
        </div>
        
        <div class="forApprovalContainer">
        this is ADMIN DASHBOARD {{auth()->user()->name}}
            <div class="forApprovalHeader">
                <div>Req ID</div>
                <div>Name</div>
                <div>Plate #</div>
                <div>Make / Model</div>
                <div>Particulars</div>
                <div>Quotation Amount</div>
                <div>Fleet Evaluated Amount</div>
                <div>M.O.T.</div>
                <div>Type of Request</div>
                <div>Shop</div>
                <div>Response</div>
            </div>
        @foreach ( $reqParticular as $data)
            <div class="forApprovalData">
                <div class="approvalData">
                    <div>{{$data->id}}</div>
                    <div class="forApprovalHeaderData">Name</div>
                    
                    <div>{{App\Models\User::find($data->user_id)->name}}</div>
                    <div class="forApprovalHeaderData">Plate #</div>
                    <div>{{App\Models\Vehicle::find($data->user_id)->plate_no}}</div>
                    <div class="forApprovalHeaderData">Make / Model</div>
                    <div>TOYOTA VIOS 1.3J</div>
                    <div class="forApprovalHeaderData">Particulars</div>
                    <div>2 Tires Replacement (175/65R14)</div>
                    <div class="forApprovalHeaderData">Quotation Amount</div>
                    <div>8,000.00</div>
                    <div class="forApprovalHeaderData">Fleet Evaluated Amount</div>
                    <div>7,500.00</div>
                    <div class="forApprovalHeaderData">M.O.T.</div>
                    <div>P.O.</div>
                    <div class="forApprovalHeaderData">Type of Request</div>
                    <div>Corrective</div>
                    <div class="forApprovalHeaderData">Shop</div>
                    <div>Ethanworx Inc.</div>
                </div>
                <div class="approvalResponse">
                    <div class="forApprovalHeaderData">Response</div>
                    <button class="approved">
                        <i class="fa-solid fa-thumbs-up"></i>
                    </button>
                    <button class="disapproved">
                        <i class="fa-solid fa-thumbs-down"></i>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </section>
<x-admin.admin-footer />