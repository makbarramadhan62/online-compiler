@extends('layouts/main')

@section('container')
    <div class="split">
        <div id="split-0">
            <section class="problem-description p-3">
                <h2 class="mb-3">Two Sum</h2>

                <div class="mb-4">
                    <p class="mb-3">Diberikan sebuah array bilangan bulat <code>nums</code> dan sebuah bilangan bulat <code>target</code>, kembalikan <em>indeks dari dua angka tersebut sehingga saat dijumlahkan menghasilkan <code>target</code></em>.</p>

                    <p class="mb-3">Anda dapat berasumsi bahwa setiap input akan memiliki <strong><em>hanya satu solusi</em></strong>, dan Anda tidak boleh menggunakan <em>elemen yang sama</em> dua kali.</p>

                    <p class="mb-3">Anda dapat mengembalikan jawabannya dalam urutan apa pun.</p>
                </div>

                <div class="mb-4">
                    <p class="mb-2"><strong class="example">Contoh 1:</strong></p>
                    <p class="mb-3">
                        <strong>Input:</strong> nums = [2,7,11,15], target = 9
                        <br>
                        <strong>Output:</strong> [0,1]
                        <br>
                        <strong>Penjelasan:</strong> Karena nums[0] + nums[1] == 9, maka kita mengembalikan [0, 1].
                    </p>

                    <p class="mb-2"><strong class="example">Contoh 2:</strong></p>
                    <p class="mb-3">
                        <strong>Input:</strong> nums = [3,2,4], target = 6
                        <br>
                        <strong>Output:</strong> [1,2]
                    </p>

                    <p class="mb-2"><strong class="example">Contoh 3:</strong></p>
                    <p class="mb-3">
                        <strong>Input:</strong> nums = [3,3], target = 6
                        <br>
                        <strong>Output:</strong> [0,1]
                    </p>

                    <p class="mb-2"><strong>Constraint:</strong></p>
                    <ul class="mb-3">
                        <li>2 ≤ nums.length ≤ 10^4</li>
                        <li>-10^9 ≤ nums[i] ≤ 10^9</li>
                        <li>-10^9 ≤ target ≤ 10^9</li>
                        <li><strong>Hanya ada satu jawaban yang valid.</strong></li>
                    </ul>

                    <strong class="d-block mb-3">Follow-up:&nbsp;</strong>
                    <p>Bisakah Anda membuat algoritma dengan kompleksitas waktu kurang dari 1 menit?</p>
                </div>
            </section>
        </div>
        
        <div id="split-1">
            <section class="submission">
                <!-- Submission Section -->
                <form class="code-editor mb-2" id="split-3">
                    <div class="submission-header mb-2">
                        <label for="codeInput" class="form-label m-0">Your Solution:</label>
                        <select class="form-select" id="languageSelect">
                            <option selected>Select Language</option>
                            @foreach($languages as $language)
                                <option value="{{ $language['id'] }}">{{ $language['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control" id="codeInput"></div>
                </form>
                
                <div class="console-section mt-2" id="split-4">
                    <div class="console-menu-wrapper d-flex align-items-center mb-2">
                        <div class="test-case console-menu mx-1">Test Case</div>
                        <div class="result console-menu mx-3">Result</div>
                    </div>
                    <div class="console-output mt-3 mb-2">
                        <div class="content-wrapper px-3">
                            <div class="test-case-content content">
                                <div class="test-case-content-header d-flex">
                                    <button class="btn btn-case btn-case-active">Case 1</button>
                                    <button class="btn btn-case mx-1">Case 2</button>
                                    <button class="btn btn-case mx-1">Case 3</button>
                                </div>
                                <div class="case-content mt-3">
                                    <label class="mb-2">nums =</label>
                                    <textarea id="single-line-textarea" rows="1">[2,7,11,15]</textarea>
                                    <label class="mb-2">target =</label>
                                    <textarea id="single-line-textarea" rows="1">9</textarea>
                                </div>
                            </div>
                            <div class="result-content content text-center">
                                <p>You must run your code first</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-submission d-flex justify-content-between align-items-center px-3">
                        <div class="fw-bold">Console</div>
                        <div>
                            <button class="btn btn-run fw-bold mx-1">Run</button>
                            <button id="submitButton" class="btn fw-bold">Submit</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection