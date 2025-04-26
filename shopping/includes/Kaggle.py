import kagglehub
from kagglehub import KaggleDatasetAdapter


file_path = ""


df = kagglehub.load_dataset(
  KaggleDatasetAdapter.PANDAS,
  "patrickb1912/ipl-complete-dataset-20082020",
  file_path,

)

print("First 5 records:", df.head())