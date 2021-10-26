<?php

namespace App\Http\Controllers;

use Helium\ApiWrapper\Api\Request;
use Helium\ApiWrapper\Api\Response;
use Illuminate\Contracts\View\View;

class ManifestController extends Controller
{
    /**
     * Displays all the data from the current Manifest File
     */
    public function index()
    {
        $response = Request::route('manifest')->send();
        $manifest = $response->json(false);
        $data = [];

        foreach ($manifest as $key => $value) {
            if ($key == "Response") {
                array_push($data, $value);
            }
        }

        return View('manifest', ['manifest' => $data]);
    }

    /**
     * Display all JSON World Component Paths
     *
     * @param string $lang
     * @return void
     */
    public function jsonWorldComponentContentPaths(string $lang = "en")
    {
        $response = Request::route('manifest')->send();
        $manifest = $response->json();
        $data = [];

        foreach ($manifest as $key => $value) {
            if ($key == "Response") {
                array_push($data, $value['jsonWorldComponentContentPaths'][$lang]);
            }
        }

        return view('jsonWorldComponentContentPaths', ['data' => $data]);
    }

    /**
     * Displays the JSON contents of a single jsonWorldComponentContentPaths property
     */
    public function jsonComponentContent(string $lang, string $table)
    {
        $contentPaths = $this->jsonWorldComponentContentPaths($lang);

        $list = $contentPaths['data'][0];
        $pathList = [];

        foreach ($list as $value) {
            if (str_contains($value, $table)) {
                array_push($pathList, $value);
            }
        }

        $response = Request::route('manifest.jsonComponentContent')
            ->pathParams(['path' => $pathList[0]])
            ->send();

        $content = $response->json(false);

        return view('jsonComponentContent', compact('content'));
    }
}
