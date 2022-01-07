<div id="row-matkul" class="row">
    <div class="col-sm-12 text-center">
        @foreach ($lecture as $lct)
            <div class="mata-kuliah">
                <div class="row">
                    <p> {{ $lct->nama }}</p>
                    @foreach ($lct->groups as $kp)
                        <div class="col-sm-6">
                            <input class="kp-button" type="button" value="{{ $kp->kode }}"
                                kode-matkul="{{ $lct->id }}">
                            @foreach ($kp->schedules as $sch)
                                <p>{{ $sch->hari }} {{ $sch->waktuMulai }}-{{ $sch->waktuBerakhir }}</p>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
{{ $lecture->onEachSide(1)->links() }}
