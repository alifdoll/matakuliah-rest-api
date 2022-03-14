<div id="row-matkul" class="row">
    <div class="col-sm-12 text-center">
        @foreach ($lecture as $lct)
            <div class="mata-kuliah">
                <div class="row">
                    <p>{{ $lct->nama }}</p>
                    @foreach ($lct->groups as $kp)
                        <div class="col-sm-6 kelas-info">
                            
                            <input class="kp-button" type="button" value="{{ $kp->kode }}"
                                id-matkul="{{ $lct->id }}" kode-matkul="{{ $lct->kode }}"
                                nama-matkul="{{ $lct->nama }}" kelas-tabrakan="false" terpilih="false"/>
                            
                            @foreach ($kp->schedules as $sch)
                                <p class="jadwal-info">{{ $sch->hari }} {{ \Carbon\Carbon::createFromFormat('H:i:s', $sch->waktuMulai)->format('h:i') }}-{{ \Carbon\Carbon::createFromFormat('H:i:s', $sch->waktuBerakhir)->format('h:i') }}</p>
                            @endforeach
                            <div class="kelas-tabrakan-info">
                                TABRAKAN TESTING
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
{{ $lecture->onEachSide(1)->links() }}
