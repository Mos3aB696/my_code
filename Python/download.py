import os
from pytube import Playlist, YouTube

# Prompt the user for the playlist URL
playlist_url = input("Enter the playlist URL: ")

# Create a Playlist object for the playlist
try:
    playlist = Playlist(playlist_url)
except Exception as e:
    print("Error:", e)
    exit()

# Specify the download directory (replace with your desired path)
# Expand the tilde to the user's home directory
download_path = os.path.expanduser("~/Downloads/")

# Ensure the download directory exists
if not os.path.exists(download_path):
    os.makedirs(download_path)

# Prompt the user to choose the download resolution
print("Available resolutions: 240p, 360p, 480p, 720p, 1080p, 1440p, 2160p")
resolution = input("Enter your preferred resolution: ")

# Download each video from the playlist
for url in playlist.video_urls:
    try:
        # Create a Youtube object for each video
        yt = YouTube(url)

        # Iterate over streams to find one that matches the user's preferred resolution and includes audio
        desired_stream = None
        for stream in yt.streams.filter(progressive=True):
            if stream.resolution == resolution:
                desired_stream = stream
                break

        if desired_stream is None:
            print(f"No stream found for resolution {
                  resolution} with audio. Skipping video.")
            continue

        # Download the video
        desired_stream.download(output_path=download_path)
        print(f"Downloaded: {yt.title}")
    except Exception as e:
        print(f"Error downloading {yt.title}:", e)

print("Playlist download complete (with errors reported).")
