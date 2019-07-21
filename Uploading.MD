# How to run a trained model on Codalab and submit it for evaluation?

We use Codalab to evaluate models and display their scores on the leaderboard. 

Before you run on Codalab, first you have to make sure you have a docker environment that can run your code. You can create your own docker that satisifies your requirements, or you can use existing ones on https://hub.docker.com/. We recommend https://hub.docker.com/r/floydhub which contains dockers for almost every deep-learning framework. Follow these steps one by one to run our model on Codalab.

1. Install codalab client to upload data from command line

See https://github.com/codalab/codalab-worksheets/wiki/CLI-Basics#installation

2. Create a worksheet

Go to https://worksheets.codalab.org and create a worksheet. Say you call this username-coqa-baseline

3. Upload data to that worksheet

Run the following command from your terminal to switch to that worksheet first.

  `cl work main::username-coqa-baseline`

Download data to your local system and upload it to that worksheet. You can also use the web-interface to upload data if the data is in tar/zip format and then untar/unzip. If you use web-interface, you can skip steps 1 and 2.

Add then dev-file to your worksheet.

4. Install requirements and run the code

Install the requirements and runs the code. On the codalab worksheet's web terminal, run the following command which specifies the docker, number of gpus, cpu memory, etc.

  `cl run :coqa-dev-v1.0.json :coqa-baselines 'sh coqa-baselines/run_on_codalab.sh' --request-docker-image floydhub/pytorch:0.4.0-gpu.cuda9cudnn7-py3.33 --request-network --request-gpus 1 --request-memory 6g`

Email YiqunChen1999@163.com when you can run your model successfully.

Please email these details:

    link to your worksheet
    cl run command
    path to output predictions file
    System name in this sample format: BERT + MMFT + ADA (single model) Microsoft Research Asia

### For more details, we recommend you some websites:
 
https://hub.docker.com/

https://github.com/codalab/codalab-worksheets/wiki/CLI-Basics#installation

https://worksheets.codalab.org

https://worksheets.codalab.org/worksheets/0x8212d84ca41c4150b555a075b19ccc05/
